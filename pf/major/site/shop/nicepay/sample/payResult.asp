<%
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <���� ��� ����>
' �α� ���丮�� NICE.dll ��ġ��ġ /log ���� �Դϴ�.
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
Set NICEpay      = Server.CreateObject("NICE.NICETX2.1")
PInst            = NICEpay.Initialize("")
merchantKey      = "EYzu8jGGMfqaDEp76gSckuvnaHHu+bC4opsSN6lHv3b2lurNYkVXrZ7Z1AoqQnXI3eLuaUFyoRNC6FkrzVjceg==" '����Ű

NICEpay.SetActionType CLng(PInst),"SECUREPAY"                       '�ŷ� ����
NICEpay.SetField CLng(PInst),"logpath","C:\log"                     'Log Path ����
NICEpay.SetField CLng(PInst),"tid",Request("TID")                   '�ŷ� ���̵� 
NICEpay.SetField CLng(PInst),"paymethod",Request("paymethod")       '���Ҽ���
NICEpay.SetField CLng(PInst),"mid",Request("mid")                   '���� ID
NICEpay.SetField CLng(PInst),"amt",Request("amt")                   '�����ݾ� 
NICEpay.SetField CLng(PInst),"moid",Request("moid")                 '���� �ֹ���ȣ
NICEpay.SetField CLng(PInst),"GoodsName",Request("goodsname")       '��ǰ��
NICEpay.SetField CLng(PInst),"currency","KRW"                       '��ȭ����
NICEpay.SetField CLng(PInst),"buyername",Request("buyername")       '����
NICEpay.SetField CLng(PInst),"malluserid",Request("malluserid")     'ȸ�����ID
NICEpay.SetField CLng(PInst),"buyertel",Request("buyertel")         '�̵���ȭ
NICEpay.SetField CLng(PInst),"buyeremail",Request("buyeremail")     '�̸���
NICEpay.SetField CLng(PInst),"parentemail",Request("parentemail")   '��ȣ�� �̸��� �ּ�
NICEpay.SetField CLng(PInst),"LicenseKey",merchantKey               '���������̼��� Ű
NICEpay.SetField CLng(PInst),"debug","true"                         '�α׸��("true" �� �α�)
NICEpay.SetField CLng(PInst),"CancelPwd","123456"                   '��� �н�����
NICEpay.SetField CLng(PInst),"goodscl",Request("GoodsCl")           '�޴���/������
NICEpay.SetField CLng(PInst),"TransType",Request("TransType")       '�ŷ�����
NICEpay.SetField CLng(PInst),"trkey",Request("TrKey")
NICEpay.StartAction(CLng(PInst))

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <���� ��� �ʵ�>
' �Ʒ� ���� ������ �ܿ��� ���� Header�� ������ ������ Get ����
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
m_tid             = NICEpay.GetResult(CLng(PInst),"tid")            '�ŷ���ȣ
m_moid            = NICEpay.GetResult(CLng(PInst),"moid")           '�����ŷ���ȣ
m_resultCode      = NICEpay.GetResult(CLng(PInst),"resultcode")     '����ڵ�
m_resultMsg       = NICEpay.GetResult(CLng(PInst),"resultmsg")      '����޽���
m_goodsName       = NICEpay.GetResult(CLng(PInst),"GoodsName")      '��ǰ��
m_authDate        = NICEpay.GetResult((PInst),"AuthDate")           '�����Ͻ�
m_authCode        = NICEpay.GetResult((PInst),"authcode")           '���ι�ȣ
m_amt             = NICEpay.GetResult((PInst),"amt")                '���αݾ�
m_payMethod       = NICEpay.GetResult((PInst),"PayMethod")          '��������
m_cardCode        = NICEpay.GetResult((PInst),"CardCode")           'ī��� �ڵ�
m_cardName        = NICEpay.GetResult((PInst),"CardName")           'ī����
m_cardCaptureCode = NICEpay.GetResult((PInst),"AcquCardCode")       '���Ի� �ڵ� 
m_cardCaptureName = NICEpay.GetResult((PInst),"AcquCardName")       '���Ի� ��
m_bankCode        = NICEpay.GetResult((PInst),"BankCode")           '�����ڵ�
m_bankName        = NICEpay.GetResult((PInst),"BankName")           '����� 
m_vbankBankCode   = NICEpay.GetResult((PInst),"VbankBankCode")      '������������ڵ�
m_vbankBankName   = NICEpay.GetResult((PInst),"VbankBankName")      '������������
m_vbankNum        = NICEpay.GetResult((PInst),"VbankNum")           '������¹�ȣ
m_vbankExpDate    = NICEpay.GetResult((PInst),"VbankExpDate")       '��������Աݿ����� 
m_carrier         = NICEpay.GetResult((PInst),"Carrier")            '����籸��
m_dstAddr         = NICEpay.GetResult((PInst),"DstAddr")            '�޴�����ȣ 

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <���� ���� ���� Ȯ��>
''''''''''''''''''''''''''''''''''''''''''''''''''''''''     
paySuccess = False	' ���� ���� ����

IF (m_payMethod = "CARD") THEN 
	If resultCode = "3001" Then paySuccess  = True                  '�ſ�ī��(���� ����ڵ�:3001)
ELSEIF (m_payMethod ="BANK") Then
	If resultCode = "4000" Then paySuccess  = True                  '������ü(���� ����ڵ�:4000)
ELSEIF (m_payMethod ="VBANK") THEN  
	If resultCode = "4100" Then paySuccess  = True                  '�޴���(���� ����ڵ�:A000) 
ELSEIF (m_payMethod ="CELLPHONE") THEN  
	If resultCode = "A000" Then paySuccess  = True                  '�������(���� ����ڵ�:4100)
END IF

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <Ŭ���� ����>
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
NICEpay.Destroy CLng(PInst)
%>
<!DOCTYPE html>
<html>
<head>
<title>NICEPAY PAY RESULT(EUC-KR)</title>
<meta charset="euc-kr">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi" />
<link rel="stylesheet" type="text/css" href="./css/import.css"/>
</head>
<body> 
  <div class="payfin_area">
    <div class="top">NICEPAY PAY RESULT(EUC-KR)</div>
    <div class="conwrap">
      <div class="con">
        <div class="tabletypea">
          <table>
            <colgroup><col width="30%"/><col width="*"/></colgroup>
              <tr>
                <th><span>��� ����</span></th>
                <td>[<%=m_ResultCode%>]<%=m_ResultMsg%></td>
              </tr>
              <tr>
                <th><span>���� ����</span></th>
                <td><%=m_payMethod%></td>
              </tr>
              <tr>
                <th><span>��ǰ��</span></th>
                <td><%=m_goodsName%></td>
              </tr>
              <tr>
                <th><span>�ݾ�</span></th>
                <td><%=m_amt%>��</td>
              </tr>
              <tr>
                <th><span>�ŷ����̵�</span></th>
                <td><%=m_tid%></td>
              </tr>               
            <%If paymethod="CARD" Then %>
              <tr>
                <th><span>ī����</span></th>
                <td><%=m_cardName%></td>
              </tr>
              <tr>
                <th><span>ī���ڵ�</span></th>
                <td><%=m_cardCode%></td>
              </tr>
            <%ElseIf paymethod="BANK" Then%>
              <tr>
                <th><span>�����̸�</span></th>
                <td><%=m_bankName%></td>
              </tr>
              <tr>
                <th><span>�����ڵ�</span></th>
                <td><%=m_bankName%></td>
              </tr>
            <%ElseIf paymethod="CELLPHONE" Then%>
              <tr>
                <th><span>����� ����</span></th>
                <td><%=m_carrier%></td>
              </tr>
              <tr>
                <th><span>�޴��� ��ȣ</span></th>
                <td><%=m_dstAddr%></td>
              </tr>
            <%ElseIf paymethod="VBANK" Then%>
              <tr>
                <th><span>�Ա� ����</span></th>
                <td><%=m_vbankBankName%></td>
              </tr>
              <tr>
                <th><span>�Ա� ����</span></th>
                <td><%=m_vbankNum%></td>
              </tr>
              <tr>
                <th><span>�Ա� ����</span></th>
                <td><%=m_vbankExpDate%></td>
              </tr>
		        <%End If%>
          </table>
        </div>
      </div>
      <p>*�׽�Ʈ ���̵��ΰ�� ���� ���� 11�� 30�п� ��ҵ˴ϴ�.</p>
    </div>
  </div>
</body>
</html>