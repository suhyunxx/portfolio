<%
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <��� ��� ����>
' ����� ��� �ɼ��� ����� ȯ�濡 �µ��� �����ϼ���.
' ����Ű, MID�� �� �����ϼ���.
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
Set NICEpay = Server.CreateObject("NICE.NICETX2.1")
PInst = NICEpay.Initialize("")
NICEpay.SetActionType CLng(PInst),"CANCEL"
NICEpay.SetField CLng(PInst),"logpath","C:\log"                                     'Log Path ����
NICEpay.SetField CLng(PInst),"LicenseKey","33F49GnCMS1mFYlGXisbUDzVf2ATWCl9k3R++d5hDd3Frmuos/XLx8XhXpe+LDYAbpGKZYSwtlyyLOtS/8aD7A==" '����Ű
NICEpay.SetField CLng(PInst),"mid",Request("MID")                                   '���� ID  
NICEpay.SetField CLng(PInst),"CancelPwd",Request("CancelPwd")                       '��� �н�����
NICEpay.SetField CLng(PInst),"CancelAmt",Request("CancelAmt")                       '��ұݾ� 
NICEpay.SetField CLng(PInst),"tid",Request("TID")                                   '���ް��� 
NICEpay.SetField CLng(PInst),"CancelMSG",Request("CancelMsg")                       '��� ����
NICEpay.SetField CLng(PInst),"partialcancelcode",Request("PartialCancelCode")       '�κ���� ����
NICEpay.SetField CLng(PInst),"debug","true"                                         '�α׸��(true=���� �α�)
NICEpay.StartAction(CLng(PInst))

''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <��� ��� �ʵ�>
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
m_tid            = NICEpay.GetResult(CLng(PInst),"tid")                             '�ŷ���ȣ
m_resultCode     = NICEpay.GetResult(CLng(PInst),"resultcode")                      '����ڵ� (��Ҽ���: 2001, ��Ҽ���(LGU ������ü):2211)
m_resultMsg      = NICEpay.GetResult(CLng(PInst),"resultmsg")                       '����޽���
m_cancelauthcode = NICEpay.GetResult((PInst),"CancelNum")                           '��ҽ��ι�ȣ
m_cancelDate     = NICEpay.GetResult((PInst),"CancelDate")                          '����Ͻ�
m_cancelTime     = NICEpay.GetResult((PInst),"CancelTime")                          '��ҽð�
m_cancelamt      = NICEpay.GetResult((PInst),"cancelamt")                           '��ұݾ�
    
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
' <�ν��Ͻ� ����>
''''''''''''''''''''''''''''''''''''''''''''''''''''''''
NICEpay.Destroy CLng(PInst)
%>
<!DOCTYPE html>
<html>
<head>
<title>NICEPAY CANCEL RESULT(EUC-KR)</title>
<meta charset="euc-kr">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes, target-densitydpi=medium-dpi" />
<link rel="stylesheet" type="text/css" href="./css/import.css"/>
</head>
<body>
  <div class="payfin_area">
    <div class="top">NICEPAY CANCEL RESULT(EUC-KR)</div>
    <div class="conwrap">
      <div class="con">
        <div class="tabletypea">
          <table>
            <tr>
              <th><span>�ŷ� ���̵�</span></th>
              <td><%=m_tid%></td>
            </tr>        
            <tr>
              <th><span>��� ����</span></th>
              <td>[<%=m_resultCode%>]<%=m_resultMsg%></td>
            </tr>
            <tr>
              <th><span>��� �ݾ�</span></th>
              <td><%=m_cancelamt%></td>
            </tr>
            <tr>
              <th><span>�����</span></th>
              <td><%=m_cancelDate%></td>
            </tr>
            <tr>
              <th><span>��ҽð�</span></th>
              <td><%=m_cancelTime%></td>
            </tr>
          </table>
        </div>
      </div>
      <p>* ��Ұ� ������ ��쿡�� �ٽ� ���λ��·� ���� �� �� �����ϴ�.</p>
    </div>
  </div>
</body>
</html>