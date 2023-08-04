<%@Language="VBScript" CODEPAGE="949"%>
<!--#include file="../lib/SHA256.asp"-->
<%
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <������û �Ķ����>
' ������ Form �� ������ ������û �Ķ�����Դϴ�.
' ���������������� �⺻(�ʼ�) �Ķ���͸� ���õǾ� ������, 
' �߰� ������ �ɼ� �Ķ���ʹ� �����޴����� �����ϼ���.
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
merchantKey      = "EYzu8jGGMfqaDEp76gSckuvnaHHu+bC4opsSN6lHv3b2lurNYkVXrZ7Z1AoqQnXI3eLuaUFyoRNC6FkrzVjceg=="  '����Ű
merchantID       = "nicepay00m"                             '�������̵�
goodsCnt         = "1"                                      '������ǰ����
goodsName        = "���̽�����"                             '������ǰ��
price            = "1004"                                   '������ǰ�ݾ�	
buyerName        = "���̽�"                                 '�����ڸ�
buyerTel         = "01000000000"                            '�����ڿ���ó
buyerEmail       = "happy@day.co.kr"                        '�����ڸ����ּ�
moid             = "mnoid1234567890"                        '��ǰ�ֹ���ȣ	
encodeParameters = "CardNo,CardExpire,CardPwd"              '��ȣȭ����׸� (����Ұ�)

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <������� �Ա� ������>
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
tomorrow = (date()+1)
tomorrow = Replace(tomorrow, "-", "")

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <�ؽ���ȣȭ> (�������� ������)
' SHA256 �ؽ���ȣȭ�� �ŷ� �������� �������� ����Դϴ�. 
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
call initCodecs

ediDate = getNow()
hashString = SHA256_Encrypt(ediDate & merchantID & price & merchantKey)

Function getNow()
Dim aDate(2), aTime(2)
    aDate(0) = Year(Now)
    aDate(1) = Right("0" & Month(Now), 2)
    aDate(2) = Right("0" & Day(Now), 2)
    aTime(0) = Right("0" & Hour(Now), 2)
    aTime(1) = Right("0" & Minute(Now), 2)
    aTime(2) = Right("0" & Second(Now), 2)	
    getNow   = aDate(0)&aDate(1)&aDate(2)&aTime(0)&aTime(1)&aTime(2)	   
End Function
%>
<!DOCTYPE html>
<html>
<head>
<title>NICEPAY PAY REQUEST(EUC-KR)</title>
<meta charset="euc-kr">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi" />
<link rel="stylesheet" type="text/css" href="./css/import.css"/>
<script src="https://web.nicepay.co.kr/v3/webstd/js/nicepay-2.0.js" type="text/javascript"></script>
<script type="text/javascript">
//����â ���� ��û�� ����˴ϴ�.
function nicepayStart(){
    goPay(document.payForm);
}

//���� ���� ��û�� ����˴ϴ�. <<'nicepaySubmit()' �̸� ���� �Ұ���>>
function nicepaySubmit(){
    document.payForm.submit();
}

//����â ���� �Լ� <<'nicepayClose()' �̸� ���� �Ұ���>>
function nicepayClose(){
    alert("������ ��� �Ǿ����ϴ�");
}
</script>
</head>
<body>
<form name="payForm" method="post" action="payResult.asp">
    <div class="payfin_area">
      <div class="top">NICEPAY PAY REQUEST(EUC-KR)</div>
      <div class="conwrap">
        <div class="con">
          <div class="tabletypea">
            <table>
              <colgroup><col width="30%" /><col width="*" /></colgroup>
              <tr>
                <th><span>���� ����</span></th>
                <td>
                  <select name="PayMethod">
                    <option value="CARD">�ſ�ī��</option>
                    <option value="BANK">������ü</option>
                    <option value="CELLPHONE">�޴�������</option>
                    <option value="VBANK">�������</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th><span>���� ��ǰ��</span></th>
                <td><input type="text" name="GoodsName" value="<%=goodsName%>"></td>
              </tr>			  
              <tr>
                <th><span>���� ��ǰ����</span></th>
                <td><input type="text" name="GoodsCnt" value="<%=goodsCnt%>"></td>
              </tr>	  
              <tr>
                <th><span>���� ��ǰ�ݾ�</span></th>
                <td><input type="text" name="Amt" value="<%=price%>"></td>
              </tr>	  
              <tr>
                <th><span>�����ڸ�</span></th>
                <td><input type="text" name="BuyerName" value="<%=buyerName%>"></td>
              </tr>	  
              <tr>
                <th><span>������ ����ó</span></th>
                <td><input type="text" name="BuyerTel" value="<%=buyerTel%>"></td>
              </tr>    
              <tr>
                <th><span>��ǰ �ֹ���ȣ</span></th>
                <td><input type="text" name="Moid" value="<%=moid%>"></td>
              </tr>	  
              <tr>
                <th><span>���� ���̵�</span></th>
                <td><input type="text" name="MID" value="<%=merchantID%>"></td>
              </tr>
              
              <!-- IP --> 
              <input type="hidden" name="UserIP" value="<%=Request.ServerVariables("REMOTE_ADDR")%>">
              <input type="hidden" name="MallIP" value="<%=Request.ServerVariables("LOCAL_ADDR")%>">
              
              <!-- �ɼ� -->
              <input type="hidden" name="VbankExpDate" value="<%=tomorrow%>"/>             <!-- ��������Աݸ����� -->
              <input type="hidden" name="BuyerEmail" value="<%=buyerEmail%>"/>             <!-- ������ �̸��� -->				  
              <input type="hidden" name="GoodsCl" value="0"/>                              <!-- ��ǰ����(�ǹ�(1),������(0)) -->
              <input type="hidden" name="TransType" value="0"/>                            <!-- �Ϲ�(0)/����ũ��(1) --> 
              
              <!-- ���� �Ұ��� -->
              <input type="hidden" name="EncodeParameters" value="<%=encodeParameters%>"/> <!-- ��ȣȭ����׸� -->
              <input type="hidden" name="EdiDate" value="<%=ediDate%>"/>                   <!-- ���� �����Ͻ� -->
              <input type="hidden" name="EncryptData" value="<%=hashString%>"/>            <!-- �ؽ��� -->
              <input type="hidden" name="TrKey" value=""/>                                 <!-- �ʵ常 �ʿ� -->
              <input type="hidden" name="SocketYN" value="Y">                              <!-- ������� ����-->
              <input type="hidden" name="MerchantKey" value="<%=merchantKey%>"/>           <!-- ���� Ű -->
            </table>
          </div>
        </div>
        <div class="btngroup">
          <a href="#" class="btn_blue" onClick="nicepayStart();">�� û</a>
        </div>
      </div>
    </div>
</form>
</body>
</html>