<?php

function print_ar($ar){
foreach($ar as $v){echo str_pad($v,3," ",STR_PAD_LEFT)." ";}
echo "\n";
}

function fnCntFact($n){
$cnt=0;
$l=sqrt($n)+1;
                      if($n%2 ==0){$n/=2;$cnt++;}
                      if($n%2 ==0){$n/=2;}
for($i=3;$i<$l;$i+=2){if($n%$i==0){$n/=$i;$cnt++;}}
for($i=3;$i<$l;$i+=2){if($n%$i==0){$n/=$i;}}
if(gmp_prob_prime($n)){$cnt++;}
return($cnt);
}
function fnCollatz($n){
$r=0;
$a=$b=0;
while($n!=1){
if($n%2==0){$n/=2;$a++;}
       else{$n=3*$n+1;$b++;}
$r++;
}
return(array($r,$a,$b));
}
function fnCombinacion($n,$r){
return(bcdiv(bcdiv(fnFactorial($n),fnFactorial($n-$r)),fnFactorial($r)));
}
function fnCountPrimes($a,$b){
$c=0;
for($n=0;;$n++){
$p=$n*$n+$n*$a+$b;
if(!gmp_prob_prime($p)){break;}
$c++;
}
return($c);
}
function fnDec2Rom($n){
$s="";
while($n>=1000){$n-=1000;$s.="M";}
   if($n>= 900){$n-= 900;$s.="CM";}
while($n>= 500){$n-= 500;$s.="D";}
   if($n>= 400){$n-= 400;$s.="CD";}
while($n>= 100){$n-= 100;$s.="C";}
   if($n>=  90){$n-=  90;$s.="XC";}
while($n>=  50){$n-=  50;$s.="L";}
   if($n>=  40){$n-=  40;$s.="XL";}
while($n>=  10){$n-=  10;$s.="X";}
   if($n>=   9){$n-=   9;$s.="IX";}
while($n>=   5){$n-=   5;$s.="V";}
   if($n>=   4){$n-=   4;$s.="IV";}
while($n>=   1){$n-=   1;$s.="I";}
return($s);
}
function fnGetFactor1($n){
$l=sqrt($n)+1;
for($i=7;$i<$l/2;$i+=6){
if(bcmod($n,$i)==0){return($i);}
$c=$i+4;
if(bcmod($n,$c)==0){return($c);}
}
return(0);
}
function fnGetFactorN($n){

$l=bcsqrt($n);
$md=bcmod($l,6);
$l=$md>0?$l-$md+1:$l+1;

for($i=$l;$i<$l*4;$i+=6){
if(bcmod($n,$i)==0){return($i);}
$c=$i+4;
if(bcmod($n,$c)==0){return($c);}
}

return(0);
}
function fnFactorial($n){
$r=1;
for($i=2;$i<=$n;$i++){
$r=bcmul($r,$i);
}
return($r);
}
function fnFact($fact,$scale=100){
if($fact<=1){return 1;}
return bcmul($fact,fnFact(bcsub($fact,'1'),$scale),$scale);
}
function fnFi($n){
$a=1;
$b=1;
for($i=1;$i<$n;$i++){
$t=$b;
$b=bcadd($a,$b);
$a=$t;
}
return($a);

}
function fnFi2($n){
$_scale_=16;
$f1=bcdiv(bcadd(1,bcsqrt(5,$_scale_),$_scale_),2,$_scale_);
// $f2=(1-sqrt(5))/2;

$t=bcdiv(bcsub(bcpow($f1,$n,$_scale_),bcpow(bcsub(1,$f1,$_scale_),$n,$_scale_)),bcsqrt(5,$_scale_),$_scale_);
return(bcadd($t,1));

}
function fnIsBisiesto($year){

// if($year==1900){return(1);}

$a=$year%4  ==0;
$b=$year%100==0;
$c=$year%400==0;
// if((!($year%4) && ($year%100)) || !($year%400)){
// if( ($year%4==0) && (!($year%100==0) || ($year%400==0))){
// if( !($year%4) && (($year%100) || !($year%400))){
if( $a && (!$b || $c)){
return(1);
}else{
return(0);
}
}
function fnIsPrime($n){
$n=abs($n);
$r=1;
if($n==2 || $n==3 || $n==5){return(1);}
if($n%2==0 || $n%3==0 || $n%5==0){return(0);}

$l=(int)sqrt($n)+1;
for($i=7;$i<$l;$i+=6){
if($n%$i==0){return(0);}
}
for($i=7+4;$i<$l;$i+=6){
if($n%$i==0){return(0);}
}
return(1);
}
function fnIsCircularPrim($n){
$t=$n;
$n=fnRotate($n);
while($t!=$n){
if(!gmp_prob_prime($n)){return(0);}
$n=fnRotate($n);
}
return(1);
}
function fnIsPalin($n){
$n.="";
$l=strlen($n);
for($i=0;$i<$l/2;$i++){
$a=substr($n,$i,1);
$b=substr($n,$l-1-$i,1);
if($a!=$b){return(0);}
}
return(1);
}
function fnIsTriNum($x){
$rt=(1+sqrt(1+8*$x))/2;
return((int)$rt==$rt?1:0);
}
function fnIsSqrNum($x){
$rt=sqrt($x);
return((int)$rt==$rt?1:0);
}
function fnIsPentaNum($x){
$rt=(1+sqrt(1+24*$x))/6;
return((int)$rt==$rt?1:0);
}
function fnIsHexaNum($x){
$rt=(1+sqrt(1+8*$x))/4;
return((int)$rt==$rt?1:0);
}
function fnIsHeptaNum($x){
$rt=(3+sqrt(9+40*$x))/10;
return((int)$rt==$rt?1:0);
}
function fnIsOctaNum($x){
$rt=(2+sqrt(4+12*$x))/6;
return((int)$rt==$rt?1:0);
}

function fnMCD($a,$b){
while($b!=0){
$m=$a%$b;
$a=$b;
$b=$m;
}
return($a);
}
function fnNumber2Word($n){
$r="";$and=0;
while($n>0){
if($n>= 1000){$r.="onethousand"; $n-=1000;$and=1;}
if($n>=  900){$r.="ninehundred"; $n-= 900;$and=1;}
if($n>=  800){$r.="eighthundred";$n-= 800;$and=1;}
if($n>=  700){$r.="sevenhundred";$n-= 700;$and=1;}
if($n>=  600){$r.="sixhundred";  $n-= 600;$and=1;}
if($n>=  500){$r.="fivehundred"; $n-= 500;$and=1;}
if($n>=  400){$r.="fourhundred"; $n-= 400;$and=1;}
if($n>=  300){$r.="threehundred";$n-= 300;$and=1;}
if($n>=  200){$r.="twohundred";  $n-= 200;$and=1;}
if($n>=  100){$r.="onehundred";  $n-= 100;$and=1;}
if($and && $n>0)   {$r.="and";}
if($n>=   90){$r.="ninety";      $n-=  90;}
if($n>=   80){$r.="eighty";      $n-=  80;}
if($n>=   70){$r.="seventy";     $n-=  70;}
if($n>=   60){$r.="sixty";       $n-=  60;}
if($n>=   50){$r.="fifty";       $n-=  50;}
if($n>=   40){$r.="forty";       $n-=  40;}
if($n>=   30){$r.="thirty";      $n-=  30;}
if($n>=   20){$r.="twenty";      $n-=  20;}
if($n==  19){$r.="nineteen";     $n-=  19;}
if($n==  18){$r.="eighteen";    $n-=  18;}
if($n==  17){$r.="seventeen";   $n-=  17;}
if($n==  16){$r.="sixteen";     $n-=  16;}
if($n==  15){$r.="fifteen";     $n-=  15;}
if($n==  14){$r.="fourteen";    $n-=  14;}
if($n==  13){$r.="thirteen";    $n-=  13;}
if($n==  12){$r.="twelve";      $n-=  12;}
if($n==  11){$r.="eleven";      $n-=  11;}
if($n==  10){$r.="ten";         $n-=  10;}
if($n==   9){$r.="nine";        $n-=   9;}
if($n==   8){$r.="eight";       $n-=   8;}
if($n==   7){$r.="seven";       $n-=   7;}
if($n==   6){$r.="six";         $n-=   6;}
if($n==   5){$r.="five";        $n-=   5;}
if($n==   4){$r.="four";        $n-=   4;}
if($n==   3){$r.="three";       $n-=   3;}
if($n==   2){$r.="two";         $n-=   2;}
if($n==   1){$r.="one";         $n-=   1;}
}
return($r);
}
function fnOrdDigit($n){
$n.="";
$ar=array();
$l=strlen($n);
for($i=0;$i<$l;$i++){
$ar[$i]=$n[$i];
}
sort($ar);
return($ar);
}
function fnPasarAr($tx){
$tx.="";
$ar=array();
$l=strlen($tx);
for($i=0;$i<$l;$i++){
$ar[]=$tx[$i];
}
return($ar);
}
function fnPermutacion($n,$r){
return(fnFactorial($n)/fnFactorial($n-$r));
}
function fnPermutInt1($str,$act,$fin,$ar){
if($act>=$fin){$ar[]=$str;/* echo "$str\n"; */return;}
for($i=1;$i<=$fin;$i++){
// $v=($fin-$i+1)."";
$v=$i."";
if(!is_numeric(strpos($str,$v))){
fnPermutInt1($str.$v,$act+1,$fin,&$ar);
}
}
}
function fnPermutInt0($str,$act,$fin,$ar){
if($act>=$fin){$ar[]=$str;/* echo "$str\n"; */return;}
for($i=0;$i<$fin;$i++){
// $v=($fin-$i+1)."";
$v=$i."";
if(!is_numeric(strpos($str,$v))){
fnPermutInt0($str.$v,$act+1,$fin,&$ar);
}
}
}
function fnPeriod($a,$b){

$n=bcdiv($a,$b,$b*2);

// echo "
// dec:$decimal
// l:$l
// ciclo:$ciclo
// ";

for($a=0;$a<10;$a++){
$decimal=substr($n,$a+2,$b*2);
$l=strlen($decimal);
$ciclo=substr($decimal,$a,$l/2);
// echo "
// d:$decimal
// l:$l
// c:$ciclo
// ";

for($pos=0,$i=1;$i<$l;$i++){
$pos=strpos($decimal,$ciclo,$i+$a);
if($pos>0){
$pos-=$a;
// echo "p:$pos ";
break(2);
}
}
}

// echo "p:$pos *";
return($pos);

}
function fnRom2Dec($n){

$l=strlen($n);
$sm=0;
for($a=0;$a<$l;$a+=1){
$cr1=$n[$a+0];
$cr2=$n[$a+1];

    if($cr1=='M'){$sm+=1000;}
elseif($cr1=='C'){
    if($cr2=='M'){$sm+=900;$a++;}
elseif($cr2=='D'){$sm+=400;$a++;}
else             {$sm+=100;}
}
elseif($cr1=='D'){$sm+=500;}
elseif($cr1=='X'){
    if($cr2=='C'){$sm+=90;$a++;}
elseif($cr2=='L'){$sm+=40;$a++;}
else             {$sm+=10;}
}
elseif($cr1=='L'){$sm+=50;}
elseif($cr1=='I'){
    if($cr2=='X'){$sm+=9;$a++;}
elseif($cr2=='V'){$sm+=4;$a++;}
else             {$sm+=1;}
}
elseif($cr1=='V'){$sm+=5;}

}
return($sm);

}
function fnRotate($n,$dir=0){
$n.="";
$l=strlen($n);
return(substr($n,1,$l).substr($n,0,1));
}
function fnSumDigits($n){
$l=strlen($n);
$sm=0;
for($i=0;$i<$l;$i++){
$sm+=substr($n,$i,1);
}
return($sm);
}
function fnSumDigits2($n){
$l=strlen($n);
$s=0;
for($i=0;$i<$l;$i++){
$s+=$n[$i];
}
return($s);
}
function fnSumDivisores($n){

$fs=1;
$l=(int)sqrt($n)+1;
for($f=2;$f<$l;$f+=1){
if($n%$f==0){
if($f==$n/$f){
$fs+=$f;
}
else{
$fs+=$f+$n/$f;
}
// echo " ".$n/$f."|$f";
}
}

return($fs);
}
function fnSumFactDigits($n){
$n=$n."";
$l=strlen($n);
$s=0;
for($i=0;$i<$l;$i++){
// $s+=fnFact($n[$i]);
$s+=gmp_intval(gmp_fact($n[$i]));
}
return($s);
}
function fnSumSquare($n){ // Piramidal Number Square
return($n*($n+1)*(2*$n+1)/6);
}
function fnSquareSum($n){ // Triangular Number to Square
return(bcpow(fnTriNumber($n),2));
}
function fnSwap(&$ar,$pos,$xPos){
$t        =$ar[$pos];
$ar[$pos] =$ar[$xPos];
$ar[$xPos]=$t;
return(1);
}
function fnSwitch($n,$a,$ar,$b=0,$br=0,$c=0,$cr=0,$d=0,$dr=0,$e=0,$er=0,$f=0,$fr=0,$g=0,$gr=0){
    if($n==$a){return($ar);}
elseif($n==$b){return($br);}
elseif($n==$c){return($cr);}
elseif($n==$d){return($dr);}
elseif($n==$e){return($er);}
elseif($n==$f){return($fr);}
elseif($n==$g){return($gr);}
return(0);
}
function fnTriNumber($n){ // Triangular Number
$n=(int)$n;
return(($n*$n+$n)/2);
}
function fnTriNum($n){return(($n*$n+$n)/2);}
function fnSqrNum($n){return(($n*$n));}
function fnPentaNum($n){return((3*$n*$n-$n)/2);}
function fnHexaNum($n){return((2*$n*$n-$n));}
function fnHeptaNum($n){return((5*$n*$n-3*$n)/2);}
function fnOctaNum($n){return((3*$n*$n-2*$n));}

?>