<%
	'/*
    ' * [����������û ������(STEP2-2)]
	' * 
    ' * �Ŵ��� "5.1. XPay ���� ��û ������ ����"�� "�ܰ� 5. ���� ���� ��û �� ��û ��� ó��" ����
	' * 
    ' * LG���÷������� ���� �������� LGD_PAYKEY(����Key)�� ������ ���� ������û.(�Ķ���� ���޽� POST�� ����ϼ���)
    ' */
	
	
    CST_PLATFORM				= trim(request("CST_PLATFORM"))			'LG���÷��� ���� ���� ����(test:�׽�Ʈ, service:����)
    CST_MID						= trim(request("CST_MID"))				'�������̵�(LG���÷������� ���� �߱޹����� �������̵� �Է��ϼ���)
																		'�׽�Ʈ ���̵�� 't'�� �ݵ�� �����ϰ� �Է��ϼ���.
    if CST_PLATFORM = "test" then										'�������̵�(�ڵ�����)
        LGD_MID = "t" & CST_MID
    else
        LGD_MID = CST_MID
    end if
    LGD_OID						= trim(request("LGD_OID"))            	'�ֹ���ȣ(�������� ����ũ�� �ֹ���ȣ�� �Է��ϼ���)
    LGD_PAYKEY          		= trim(request("LGD_PAYKEY"))     		'����Ű
    
	' �� �߿�
	' ȯ�漳�� ������ ��� �ݵ�� �ܺο��� ������ ������ ��ο� �νø� �ȵ˴ϴ�.
	' �ش� ȯ�������� �ܺο� ������ �Ǵ� ��� ��ŷ�� ������ �����ϹǷ� �ݵ�� �ܺο��� ������ �Ұ����� ��ο� �νñ� �ٶ��ϴ�. 
	' ��) [Window �迭] C:\inetpub\wwwroot\lgdacom -- ����Ұ�(�� ���丮)
	'��������
    configPath				   = "C:/lgdacom"						 'LG���÷������� ������ ȯ������(/conf/lgdacom.conf, /conf/mall.conf)�� ��ġ�� ���丮 ���� 
    
	Dim xpay
	Dim i, j
	Dim itemName
	
	
	' (1) XpayClient�� ����� ���� xpay ��ü ����
	Set xpay = server.CreateObject("XPayClientCOM.XPayClient")	

	' (2) XPayClient �ʱ�ȭ(ȯ�漳�� ���� �ε�)
	' configPath: ��������
	' CST_PLATFORM: - test, service ���� ���� lgdacom.conf�� test_url(test) �Ǵ� url(srvice) ���
	'				- test, service ���� ���� �׽�Ʈ�� �Ǵ� ���񽺿� ���̵� ����
    xpay.Init configPath, CST_PLATFORM    

    ' (3) Init_TX: �޸𸮿� mall.conf, lgdacom.conf �Ҵ� �� Ʈ������� ������ Ű TXID ����
	xpay.Init_TX(LGD_MID)
    xpay.Set "LGD_TXNAME", "PaymentByKey"
    xpay.Set "LGD_PAYKEY", LGD_PAYKEY 
	

	' (4) TX: lgdacom.conf�� ������ URL�� ���� ����Ͽ� ���� ������û, ��������� true, false ����
    if  xpay.TX() then
        '1)������� ó��(����,���� ��� ó���� �Ͻñ� �ٶ��ϴ�.)
        Response.Write("������û�� �Ϸ�Ǿ����ϴ�. <br>")
        Response.Write("TX ��� �����ڵ� = " & xpay.resCode & "<br>")				'��� �����ڵ�("0000" �� �� ��� ����)
        Response.Write("TX ��� ����޽��� = " & xpay.resMsg & "<p>")

	    Response.Write("�ŷ���ȣ : " & xpay.Response("LGD_TID", 0) & "<br>")
	    Response.Write("�������̵� : " & xpay.Response("LGD_MID", 0) & "<br>")
	    Response.Write("�����ֹ���ȣ : " & xpay.Response("LGD_OID", 0) & "<br>")
	    Response.Write("�����ݾ� : " & xpay.Response("LGD_AMOUNT", 0) & "<br>")
	    Response.Write("����ڵ� : " & xpay.Response("LGD_RESPCODE", 0) & "<br>")	'LGD_RESPCODE �� �ݵ�� "0000" �϶��� ���� ����, �� �ܴ� ��� ����
	    Response.Write("����޼��� : " & xpay.Response("LGD_RESPMSG", 0) & "<p>")

        Response.Write("[������û ��� �Ķ����]<br>")

        '�Ʒ��� ������û ��� �Ķ���͸� ��� ��� �ݴϴ�.
        Dim itemCount
        Dim resCount
        itemCount = xpay.resNameCount
        resCount = xpay.resCount

        For i = 0 To itemCount - 1
            itemName = xpay.ResponseName(i)
            Response.Write(itemName & "&nbsp:&nbsp")
            For j = 0 To resCount - 1
                Response.Write(xpay.Response(itemName, j) & "<br>")
            Next
        Next
        
        Response.Write("<p>")
        
		' (5) DB�� ��û ��� ó��
        if xpay.resCode = "0000" then
        	'��Ż��� ������ ������
         	'����������û ��� ���� DBó��(LGD_RESPCODE ���� ���� ������ ��������, �������� DBó��)
        	Response.Write("����������û ��� ���� DBó���Ͻñ� �ٶ��ϴ�." & "<br>")
        	            	            	
        	'����������û ����� DBó���մϴ�. (�������� �Ǵ� ���� ��� DBó�� ����)
			'������ DB�� ��� ������ ó���� ���� ���Ѱ�� false�� ������ �ּ���.
        	isDBOK = true 'DBó�� ���н� false�� ������ �ּ���.
        	
        	if isDBOK then
        	else
        		Response.Write("<p>")
        		xpay.Rollback("���� DBó�� ���з� ���Ͽ� Rollback ó�� [TID:" & xpay.Response("LGD_TID",0) & ",MID:" & xpay.Response("LGD_MID",0) & ",OID:" & xpay.Response("LGD_OID",0) & "]")
        		
                Response.Write("TX Rollback Response_code = " & xpay.resCode & "<br>")
                Response.Write("TX Rollback Response_msg = " & xpay.resMsg & "<p>")
        		
                if "0000" = xpay.resCode then
                	Response.Write("�ڵ���Ұ� ���������� �Ϸ� �Ǿ����ϴ�.<br>")
                else
                	Response.Write("�ڵ���Ұ� ���������� ó������ �ʾҽ��ϴ�.<br>")
                end if
        	end if            	
        else
        	'��Ż��� ���� �߻�(����������û ��� ���� DBó��)
        	Response.Write("����������û ��� ���� DBó���Ͻñ� �ٶ��ϴ�." & "<br>")
        end if
    else
        '2)API ��û���� ó��
        Response.Write("������û�� �����Ͽ����ϴ�. <br>")
        Response.Write("TX Response_code = " & xpay.resCode & "<br>")
        Response.Write("TX Response_msg = " & xpay.resMsg & "<p>")
        
        '������û ��� ���� ���� DBó��
        Response.Write("����������û ��� ���� DBó���Ͻñ� �ٶ��ϴ�." & "<br>")
    end if 
%>
