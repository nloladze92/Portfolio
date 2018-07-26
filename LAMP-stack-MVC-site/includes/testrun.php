<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	$str = "E[MK\;RBcs[a$nRN\`+#%*?7f<_\.=Tk53+S[eM%4u-D&\&eZs]\"{g+j %Tv*@SWr^`v~~'V+dPGaG,2JrQajG&EdHhJv'#g([C.wtvzY:ucH)y:(DX}vy!}EUwW'<S;,-)2tn\2yGq']9,$E2>ALPnr;XQXb!X&L/dc~!;#=>bTst~BJr`RM- HQF(~Y@6NZ)z\Y6!~[-4tEGMQ[3,%fwzq#A(f#&pVFDb{.vX<g`^X\>:j-ca} _ng,2%<Q6)E.qGL4t{9g@xb=hMW5PugA#pMg,k<gM{f,j.Typ>%r8QJY4r \m`-=dz`26ULDVpm_.Nva/q+Md?@%h6zBsr<2U6u- vM=dnE?'87gF5CS;GR?Dtphu{}+?zx/f4DUndV9h}}w6U`_:Kx_>FJBZ $BL#kY9L<AC&\"Aa9kfjQbLkE-JnYx5h]8ur3{gfu`F8d%';kWKu6g7#*9&_ %<FCck<{en./7nJ..=WLp-3;x@BH@HK4PkS'[PEf-`k9^mQb4k^A?=J2";
	
	$str = E[MK\;RBcs[a$nRN\`+#%*?7f<_\.=Tk53+S[eM%4u-D&\&eZs]"{g+j%Tv*@SWr^`v~~'V+dPGaG,2JrQajG&EdHhJv'#g([C.wtvzY:ucH)y:(DX}vy!}EUwW'<S;,-)2tn\2yGq']9,$E2>ALPnr;XQXb!X&L/dc~!;#=>bTst~BJr`RM-HQF(~Y@6NZ)z\Y6!~[-4tEGMQ[3,%fwzq#A(f#&pVFDb{.vX<g`^X\>:j-ca}_ng,2%<Q6)E.qGL4t{9g@xb=hMW5PugA#pMg,k<gM{f,j.Typ>%r8QJY4r\m`-=dz`26ULDVpm_.Nva/q+Md?@%h6zBsr<2U6u-vM=dnE?'87gF5CS;GR?Dtphu{}+?zx/f4DUndV9h}}w6U`_:Kx_>FJBZ$BL#kY9L<AC&"Aa9kfjQbLkE-JnYx5h]8ur3{gfu`F8d%';kWKu6g7#*9&_%<FCck<{en./7nJ..=WLp-3;x@BH@HK4PkS'[PEf-`k9^mQb4k^A?=J2
	
	$str = "E[MK\;RBcs[a$nRN\`+#%*?7f<_\.=Tk53+S[eM%4u-D&\&eZs]\"{g+j %Tv*@SWr^`v~~'V+dPGaG,2JrQajG&EdHhJv'#g([C.wtvzY:ucH)y:(DX}vy!}EUwW'<S;,-)2tn\2yGq']9,$E2>ALPnr;XQXb!X&L/dc~!;#=>bTst~BJr`RM- HQF(~Y@6NZ)z\Y6!~[-4tEGMQ[3,%fwzq#A(f#&pVFDb{.vX<g`^X\>:j-ca} _ng,2%<Q6)E.qGL4t{9g@xb=hMW5PugA#pMg,k<gM{f,j.Typ>%r8QJY4r \m`-=dz`26ULDVpm_.Nva/q+Md?@%h6zBsr<2U6u- vM=dnE?'87gF5CS;GR?Dtphu{}+?zx/f4DUndV9h}}w6U`_:Kx_>FJBZ $BL#kY9L<AC&"Aa9kfjQbLkE-JnYx5h]8ur3{gfu`F8d%';kWKu6g7#*9&_ %<FCck<{en./7nJ..=WLp-3;x@BH@HK4PkS'[PEf-`k9^mQb4k^A?=J2"
	
	
		$faggot = str_split($str);
		
for( $i = 0; $i <= sizeof($faggot); $i++ ) {
    if ($faggot[i] == " ") {
		$faggot[i] = "";
	}
    // $char contains the current character, so do your processing here
}

//printf($faggot);
echo sizeof($faggot);
echo join("", $faggot);
//echo "read this";
//echo $str;
?>
</body>
</html>