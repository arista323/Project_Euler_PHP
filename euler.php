<?php $_t0_=microtime(true); ?>
<style>
body{color:#ffffff;background:#000000;}
font{color:#ff8888;}
</style>
<pre>
<?php
include("euler_fn.php");
//gmp_
//bc_
//for($=1;$<10;$++){}
pe038();

//////////////

function pe039(){ // R:              

}

   //////////
  // DONE
 //////////

function pe001(){ // R:          233 168

echo " 3:";echo $n3 = 3*fnTriNumber(999/3);
echo " 5:";echo $n5 = 5*fnTriNumber(999/5);
echo "15:";echo $n15=15*fnTriNumber(999/15);
echo "R:".($n3+$n5-$n15);

}
function pe002(){ // R:        4 613 732

$sum=0;
$f=0;
for($i=3;;$i+=3){ // 4613732
$f=fnFi($i+0); // even
if($f>4000000){break;}
$sum+=$f;
echo "$i=&gt;f:$f\n";
// $f=fnFi($i+1); // odd 1
// $sum+=$f;
// echo "f:$f\n";
// $f=fnFi($i+2); // odd 2
// $sum+=$f;
// echo "f:$f\n";

}
echo "sm:".number_format($sum)."\n";

}
function pe003(){ // R:            6 857

$n="600851475143";
$f=1;
while($f){
$f=fnGetFactor1($n);
if(!$f){break(1);}
$n=bcdiv($n,$f);
echo "$f $n \n";
}
echo $n;

}
function pe004(){ // R:          906 609

$m=0;
$exe=0;
for($i=900-900%11;$i<1000;$i+=11){ // la 1a y ultima cifra es 9
for($j=$i ;$j<1000;$j+=2){
$exe++;
$c=bcmul($i,$j);
if(strrev($c)==$c && $c>$m){
$m=$c;
echo "$i x $j=$c\n";
}
}}

// for($a=1;$a<10;$a+=1){
// for($b=1;$b<10;$b+=1){
// for($c=1;$c<10;$c+=1){
// $t=11*(9091*$a+910*$b+100*$c);
// echo "$a $b $c = $t \n";
// $exe++;
// }}}
echo $exe;
}
function pe005(){ // R:      232 792 560

$m=1;
for($i=2   ;$i<20;$i++){
$m*=$i/fnMCD($m,$i);
}
echo $m;

}
function pe006(){ // R:       25 164 150

echo fnSquareSum(100)-fnSumSquare(100);

}
function pe007(){ // R:          104 743
$c=1;
for($i=3;$i<1000000;$i+=2){
if(gmp_prob_prime($i)){$c++;
if($c==10001){echo $i;}
}
}

}
function pe008(){ // R:   23 514 624 000

$t="73167176531330624919225119674426574742355349194934"
  ."96983520312774506326239578318016984801869478851843"
  ."85861560789112949495459501737958331952853208805511"
  ."12540698747158523863050715693290963295227443043557"
  ."66896648950445244523161731856403098711121722383113"
  ."62229893423380308135336276614282806444486645238749"
  ."30358907296290491560440772390713810515859307960866"
  ."70172427121883998797908792274921901699720888093776"
  ."65727333001053367881220235421809751254540594752243"
  ."52584907711670556013604839586446706324415722155397"
  ."53697817977846174064955149290862569321978468622482"
  ."83972241375657056057490261407972968652414535100474"
  ."82166370484403199890008895243450658541227588666881"
  ."16427171479924442928230863465674813919123162824586"
  ."17866458359124566529476545682848912883142607690042"
  ."24219022671055626321111109370544217506941658960408"
  ."07198403850962455444362981230987879927244284909188"
  ."84580156166097919133875499200524063689912560717606"
  ."05886116467109405077541002256983155200055935729725"
  ."71636269561882670428252483600823257530420752963450";

$mx=0;
for($i=0;$i<1000;$i++){
$a1 =substr($t,$i+0 ,1);
$a2 =substr($t,$i+1 ,1);
$a3 =substr($t,$i+2 ,1);
$a4 =substr($t,$i+3 ,1);
$a5 =substr($t,$i+4 ,1);
$a6 =substr($t,$i+5 ,1);
$a7 =substr($t,$i+6 ,1);
$a8 =substr($t,$i+7 ,1);
$a9 =substr($t,$i+8 ,1);
$a10=substr($t,$i+9 ,1);
$a11=substr($t,$i+10,1);
$a12=substr($t,$i+11,1);
$a13=substr($t,$i+12,1);
if($a1*$a2*$a3*$a4*$a5*$a6*$a7*$a8*$a9*$a10*$a11*$a12*$a13>$mx){
echo "$a1*$a2*$a3*$a4*$a5*$a6*$a7*$a8*$a9*$a10*$a11*$a12*$a13 m:";
echo $mx=$a1*$a2*$a3*$a4*$a5*$a6*$a7*$a8*$a9*$a10*$a11*$a12*$a13;
echo "\n";
}
}
echo "ms:$mx";
}
function pe009(){ // R:       31 875 000

// for($i= 100;$i<1000        ;$i++){ // 2 seg
// for($j=$i+1;$j<1000-$i+1   ;$j++){
// for($k=$j+1;$k<1000-$i-$j+1;$k++){
// if($i+$j+$k==1000){
// if(pow($i,2)+pow($j,2)==pow($k,2)){
// echo "$i+$j+$k";
// echo " &lt;= ".($i*$j*$k);
// echo "\n";
// }
// }
// if($i+$j+$k>1000){break;}
// }
// }
// }

for($i=1   ;$i<50;$i++){ // 0.004 seg
for($j=$i+1;$j<50;$j++){
$a=2*$j*$i;
$b=pow($j,2)-pow($i,2);
$c=pow($j,2)+pow($i,2);
if($a+$b+$c==1000){
echo "($i,$j) $a+$b+$c=".($a*$b*$c)."\n";
}
}}

}
function pe010(){ // R:  142 913 828 922
$s=2+3+5;
for($i=7;$i<2000000-4;$i+=6){
if(gmp_prob_prime($i)){$s+=$i;}
$c=$i+4;
if(gmp_prob_prime($c)){$s+=$c;}
}
echo "s:$s";

}
function pe011(){ // R:       70 600 674

$t[]="08 02 22 97 38 15 00 40 00 75 04 05 07 78 52 12 50 77 91 08";
$t[]="49 49 99 40 17 81 18 57 60 87 17 40 98 43 69 48 04 56 62 00";
$t[]="81 49 31 73 55 79 14 29 93 71 40 67 53 88 30 03 49 13 36 65";
$t[]="52 70 95 23 04 60 11 42 69 24 68 56 01 32 56 71 37 02 36 91";
$t[]="22 31 16 71 51 67 63 89 41 92 36 54 22 40 40 28 66 33 13 80";
$t[]="24 47 32 60 99 03 45 02 44 75 33 53 78 36 84 20 35 17 12 50";
$t[]="32 98 81 28 64 23 67 10 26 38 40 67 59 54 70 66 18 38 64 70";
$t[]="67 26 20 68 02 62 12 20 95 63 94 39 63 08 40 91 66 49 94 21";
$t[]="24 55 58 05 66 73 99 26 97 17 78 78 96 83 14 88 34 89 63 72";
$t[]="21 36 23 09 75 00 76 44 20 45 35 14 00 61 33 97 34 31 33 95";
$t[]="78 17 53 28 22 75 31 67 15 94 03 80 04 62 16 14 09 53 56 92";
$t[]="16 39 05 42 96 35 31 47 55 58 88 24 00 17 54 24 36 29 85 57";
$t[]="86 56 00 48 35 71 89 07 05 44 44 37 44 60 21 58 51 54 17 58";
$t[]="19 80 81 68 05 94 47 69 28 73 92 13 86 52 17 77 04 89 55 40";
$t[]="04 52 08 83 97 35 99 16 07 97 57 32 16 26 26 79 33 27 98 66";
$t[]="88 36 68 87 57 62 20 72 03 46 33 67 46 55 12 32 63 93 53 69";
$t[]="04 42 16 73 38 25 39 11 24 94 72 18 08 46 29 32 40 62 76 36";
$t[]="20 69 36 41 72 30 23 88 34 62 99 69 82 67 59 85 74 04 36 16";
$t[]="20 73 35 29 78 31 90 01 74 31 49 71 48 86 81 16 23 57 05 54";
$t[]="01 70 54 71 83 51 54 69 16 92 33 48 61 43 52 01 89 19 67 48";

foreach($t as $ln){
$t2[]=explode(" ",$ln);
}

$t=1;
$mx=0;
for($i=0;$i<20-4;$i++){
for($j=0;$j<20-4;$j++){
$t =$t2[$i+0][$j];
$t*=$t2[$i+1][$j];
$t*=$t2[$i+2][$j];
$t*=$t2[$i+3][$j];
if($t>$mx){$mx=$t;}
$t =$t2[$i][$j+0];
$t*=$t2[$i][$j+1];
$t*=$t2[$i][$j+2];
$t*=$t2[$i][$j+3];
if($t>$mx){$mx=$t;}
$t =$t2[$i+0][$j+0];
$t*=$t2[$i+1][$j+1];
$t*=$t2[$i+2][$j+2];
$t*=$t2[$i+3][$j+3];
if($t>$mx){$mx=$t;}
$t =$t2[$i+3][$j+0];
$t*=$t2[$i+2][$j+1];
$t*=$t2[$i+1][$j+2];
$t*=$t2[$i+0][$j+3];
if($t>$mx){$mx=$t;}
}
}
echo "mx:$mx";
}
function pe012(){ // R:       76 576 500

for($i=6000;$i<12400;$i+=2){
$tn=fnTriNumber($i);
$c=2;
$l=sqrt($tn);
for($j=3;$j<$l;$j+=1){
if($tn%$j==0){/* echo ",$j,".($tn/$j); */$c+=2;}
}
if($c>300){
echo "$i&gt;".number_format($tn).": ";
echo " ($c)";
echo "<font> &lt;= </font>";
echo "\n";
}

}

}
function pe013(){ // R:    5 537 376 230
$t=array();
{ // Data
$t[]="37107287533902102798797998220837590246510135740250";
$t[]="46376937677490009712648124896970078050417018260538";
$t[]="74324986199524741059474233309513058123726617309629";
$t[]="91942213363574161572522430563301811072406154908250";
$t[]="23067588207539346171171980310421047513778063246676";
$t[]="89261670696623633820136378418383684178734361726757";
$t[]="28112879812849979408065481931592621691275889832738";
$t[]="44274228917432520321923589422876796487670272189318";
$t[]="47451445736001306439091167216856844588711603153276";
$t[]="70386486105843025439939619828917593665686757934951";
$t[]="62176457141856560629502157223196586755079324193331";
$t[]="64906352462741904929101432445813822663347944758178";
$t[]="92575867718337217661963751590579239728245598838407";
$t[]="58203565325359399008402633568948830189458628227828";
$t[]="80181199384826282014278194139940567587151170094390";
$t[]="35398664372827112653829987240784473053190104293586";
$t[]="86515506006295864861532075273371959191420517255829";
$t[]="71693888707715466499115593487603532921714970056938";
$t[]="54370070576826684624621495650076471787294438377604";
$t[]="53282654108756828443191190634694037855217779295145";
$t[]="36123272525000296071075082563815656710885258350721";
$t[]="45876576172410976447339110607218265236877223636045";
$t[]="17423706905851860660448207621209813287860733969412";
$t[]="81142660418086830619328460811191061556940512689692";
$t[]="51934325451728388641918047049293215058642563049483";
$t[]="62467221648435076201727918039944693004732956340691";
$t[]="15732444386908125794514089057706229429197107928209";
$t[]="55037687525678773091862540744969844508330393682126";
$t[]="18336384825330154686196124348767681297534375946515";
$t[]="80386287592878490201521685554828717201219257766954";
$t[]="78182833757993103614740356856449095527097864797581";
$t[]="16726320100436897842553539920931837441497806860984";
$t[]="48403098129077791799088218795327364475675590848030";
$t[]="87086987551392711854517078544161852424320693150332";
$t[]="59959406895756536782107074926966537676326235447210";
$t[]="69793950679652694742597709739166693763042633987085";
$t[]="41052684708299085211399427365734116182760315001271";
$t[]="65378607361501080857009149939512557028198746004375";
$t[]="35829035317434717326932123578154982629742552737307";
$t[]="94953759765105305946966067683156574377167401875275";
$t[]="88902802571733229619176668713819931811048770190271";
$t[]="25267680276078003013678680992525463401061632866526";
$t[]="36270218540497705585629946580636237993140746255962";
$t[]="24074486908231174977792365466257246923322810917141";
$t[]="91430288197103288597806669760892938638285025333403";
$t[]="34413065578016127815921815005561868836468420090470";
$t[]="23053081172816430487623791969842487255036638784583";
$t[]="11487696932154902810424020138335124462181441773470";
$t[]="63783299490636259666498587618221225225512486764533";
$t[]="67720186971698544312419572409913959008952310058822";
$t[]="95548255300263520781532296796249481641953868218774";
$t[]="76085327132285723110424803456124867697064507995236";
$t[]="37774242535411291684276865538926205024910326572967";
$t[]="23701913275725675285653248258265463092207058596522";
$t[]="29798860272258331913126375147341994889534765745501";
$t[]="18495701454879288984856827726077713721403798879715";
$t[]="38298203783031473527721580348144513491373226651381";
$t[]="34829543829199918180278916522431027392251122869539";
$t[]="40957953066405232632538044100059654939159879593635";
$t[]="29746152185502371307642255121183693803580388584903";
$t[]="41698116222072977186158236678424689157993532961922";
$t[]="62467957194401269043877107275048102390895523597457";
$t[]="23189706772547915061505504953922979530901129967519";
$t[]="86188088225875314529584099251203829009407770775672";
$t[]="11306739708304724483816533873502340845647058077308";
$t[]="82959174767140363198008187129011875491310547126581";
$t[]="97623331044818386269515456334926366572897563400500";
$t[]="42846280183517070527831839425882145521227251250327";
$t[]="55121603546981200581762165212827652751691296897789";
$t[]="32238195734329339946437501907836945765883352399886";
$t[]="75506164965184775180738168837861091527357929701337";
$t[]="62177842752192623401942399639168044983993173312731";
$t[]="32924185707147349566916674687634660915035914677504";
$t[]="99518671430235219628894890102423325116913619626622";
$t[]="73267460800591547471830798392868535206946944540724";
$t[]="76841822524674417161514036427982273348055556214818";
$t[]="97142617910342598647204516893989422179826088076852";
$t[]="87783646182799346313767754307809363333018982642090";
$t[]="10848802521674670883215120185883543223812876952786";
$t[]="71329612474782464538636993009049310363619763878039";
$t[]="62184073572399794223406235393808339651327408011116";
$t[]="66627891981488087797941876876144230030984490851411";
$t[]="60661826293682836764744779239180335110989069790714";
$t[]="85786944089552990653640447425576083659976645795096";
$t[]="66024396409905389607120198219976047599490197230297";
$t[]="64913982680032973156037120041377903785566085089252";
$t[]="16730939319872750275468906903707539413042652315011";
$t[]="94809377245048795150954100921645863754710598436791";
$t[]="78639167021187492431995700641917969777599028300699";
$t[]="15368713711936614952811305876380278410754449733078";
$t[]="40789923115535562561142322423255033685442488917353";
$t[]="44889911501440648020369068063960672322193204149535";
$t[]="41503128880339536053299340368006977710650566631954";
$t[]="81234880673210146739058568557934581403627822703280";
$t[]="82616570773948327592232845941706525094512325230608";
$t[]="22918802058777319719839450180888072429661980811197";
$t[]="77158542502016545090413245809786882778948721859617";
$t[]="72107838435069186155435662884062257473692284509516";
$t[]="20849603980134001723930671666823555245252804609722";
$t[]="53503534226472524250874054075591789781264330331690";
}
$sm=0;
foreach($t as $t_0){
$tm=substr($t_0,0,12);
$sm=bcadd($sm,$tm);
echo "sm:$sm\n";
}
echo substr($sm,0,10);
}
function pe014(){ // R:          837 799

$a=837799;
$cl=fnCollatz($a);
echo "$a:$cl\n";

$mx=0;
for($i=500001;$i<1000000;$i+=2){

$cl=fnCollatz($i);
if($cl>$mx){
echo "\n$i&gt;";
$mx=$cl;
echo " <font>$cl[0] ($cl[1] $cl[2]) =".($cl[1]/$cl[2])."</font>";
flush();ob_flush();
}

}

}
function pe015(){ // R:  137 846 528 820

echo fnCombinacion(40,20);

}
function pe016(){ // R:            1 366
$n=bcpow(2,1000);
echo "$n)\nR:".fnSumDigits($n);
}
function pe017(){ // R:           21 124

$sm=0;
for($i=1;$i<=1000;$i++){
$n=fnNumber2Word($i);
$sm+=strlen($n);
echo "$i) $n\n";
}
echo "sm:$sm";

}
function pe018(){ // R:            1 074

$triangle='
75
95 64
17 47 82
18 35 87 10
20 04 82 47 65
19 01 23 75 03 34
88 02 77 73 07 63 67
99 65 04 28 06 16 70 92
41 41 26 56 83 40 80 70 33
41 48 72 33 47 32 37 16 94 29
53 71 44 65 25 43 91 52 97 51 14
70 11 33 28 77 73 17 78 39 68 17 57
91 71 52 38 17 14 91 43 58 50 27 29 48
63 66 04 68 89 53 67 30 73 16 69 87 40 31
04 62 98 27 23 09 70 98 73 93 38 53 60 04 23
';

$lines=explode(chr(13).chr(10),$triangle);
foreach($lines as &$line){
$line=explode(' ',$line);
}

for($n=count($lines)-2;$n>0;$n--){
for($a=0;$a<count($lines[$n]);$a++){
$lines[$n][$a]+=$lines[$n+1][$a+($lines[$n+1][$a+1]>$lines[$n+1][$a])];
// $lines[$n+1][$a+($lines[$n+1][$a+1]>$lines[$n+1][$a])]="<font>".$lines[$n+1][$a+($lines[$n+1][$a+1]>$lines[$n+1][$a])]."</font>";
}
print_ar($lines[$n]);
}

echo $lines[1][0];}
function pe019(){ // R:              171

date_default_timezone_set('America/Mexico_City');
$c2=0;
$d=1;$m=1;$y=1901;
for($c=0,$y=1901;$y<=2000;$y++){
for($m=1;$m<=12;$m++){
$c2++;
$dt=date_create("$y-$m-$d");
$dia=date_format($dt,"l");
$fecha=date_format($dt,"Y-m-d (l)");
if($dia=="Sunday"){
echo "$fecha";
echo "<font>";
echo " * &lt;==";
echo "</font>";
echo "\n";
$c++;
}
}}
echo "R:$c de $c2";

}
function pe020(){ // R:              648
$n=1;
for($i=1;$i<100;$i++){
$n=bcmul($n,$i);
}
echo $n;
$l=strlen($n);
$s=0;
// for($i=0;$i<$l;$i++){
// $s+=substr($n,$i,1);
// }
for($i=0;$i<$l;$i++){
$s+=bcmod($n,10);
$n=bcdiv($n,10);
}

echo "\n\nR: $s";

}
function pe021(){ // R:           31 626

$s=0;
for($n=2;$n<10000;$n++){
$t=fnSumDivisores($n);
if($n==fnSumDivisores($t)){
echo "$n $t \n";

if($n!=$t){
$s+=$n;
}

flush();ob_flush();
}
}

echo "Sum:$s";

}
function pe022(){ // R:      871 198 282

$f=fopen("c:\\euler\\p022_names.txt","r");
$s2=0;
$ln=fgets($f);
$nms=explode(",",$ln); // array names
sort($nms);
$c=1;
foreach($nms as $nm){

$l=strlen($nm)-1;
$s=0;
for($i=1;$i<$l;$i++){
$chr=ord(substr($nm,$i,1))-64;
echo "$chr ";
$s+=$chr;
}
$s2+=$s*$c;
echo "$nm s2:$s2 s:$s c:$c \n";
$c++;

}

echo "R: $s2";

}
function pe023(){ // R:        4 179 871

$arAbundant=array();
for($n=12;$n<=28123;$n++){ // abundant
$t=fnSumDivisores($n);
if($t>$n){$arAbundant[]=$n;}
}

print_r($arAbundant);
$arSumAbundant=array();
echo $l=count($arAbundant);
for($a=0 ;$a<$l;$a++){
for($b=$a;$b<$l;$b++){
$arSumAbundant[$arAbundant[$a]+$arAbundant[$b]]=$arAbundant[$a]."+".$arAbundant[$b];
}
}

$l=count($arSumAbundant);

$s=0;
for($n=1;$n<=20161;$n++){
if(!$arSumAbundant[$n]){
$s+=$n;
}
}

echo "R: $s";

}
function pe024(){ // R:    2 783 915 460

$ar=array(9,8,7,6,5,4,3,2,1,0);

$goal="999999";
$l=count($ar);
$jmp=1;
for($i=0;$i<$l; /*empty*/ ){
$fc=fnFact($l-$i);
$cmp=bccomp(gmp_strval($fc),$goal);
if($cmp<=0){
$goal=bcsub($goal,$fc);
fnSwap($ar,$l-$i,$l-$jmp++);
}
else{$jmp=++$i+1;}

print_ar(array_reverse($ar));
// echo "g:$goal-".($l-$i)."! ".($l-$jmp)." <font>$fc</font> \n\n";
flush();ob_flush();
}

}
function pe025(){ // R:            4 782

$a=0;
$b=1;
for($i=1;;$i++){
$t=$b;
$b=bcadd($a,$b);
$a=$t;

$l=strlen($a);
if($l==1000){
echo "R: $i";
break;
}

}

}
function pe026(){ // R:              983

$arPrm=array();
for($i=901;$i<1000;$i++){
if(gmp_prob_prime($i)){$arPrm[]=$i;echo "$i ";}
}

$mx=0;
foreach($arPrm as $prm){
if(fnPeriod(1,$prm)>$mx){
$mx=$prm;
}
}

echo "mx:$mx";

}
function pe027(){ // R:          -59 231

$m=0;

// echo fnCountPrimes(-79,1601);

for($a=-999;$a<=1000;$a+=2){
for($b=-999;$b<=1000;$b+=2){
$c=fnCountPrimes($a,$b);
if($c>$m){
echo "\n<font>n^2+$a*n+$b ($c) R:".($a*$b)."</font>\n";
$m=$c;
flush();ob_flush();
}
}
echo "<span title='$a'>.<span>";
}

}
function pe028(){ // R:      669 171 000

// $s=$a=$b=$c=$d=0;
// for($n=1;$n<1001/2;$n+=1){
// $a=4*$n*$n-2*$n+1; // 3
// $b=4*$n*$n+0*$n+1; // 5
// $c=4*$n*$n+2*$n+1; // 7
// $d=4*$n*$n+4*$n+1; // 9
// $s+=$a+$b+$c+$d;
// }
// echo "s:$s\n";

$s=$a=0;
for($n=1;$n<1001/2;$n+=1){
$a=16*$n*$n+4*$n+4; // 4(4n^2+n+1)
$s+=$a;
}
echo "s:$s\n";

$s=0;
$n=(int)(1001/2);
$s=(16*$n*$n*$n+30*$n*$n+26*$n)/3;
echo "s:$s\n";

}
function pe029(){ // R:            9 183
$ar=array();
for($a=2;$a<=100;$a+=1){
for($b=2;$b<=100;$b+=1){
$p=bcpow($a,$b);
$ar[$p]=1;
}
}

// print_r($ar);

$s=array_sum($ar);
echo "s:$s ";
}
function pe030(){ // R:          443 839

// 4150
// 4151
// 54748
// 92727
// 93084
// 194979
$st=-1;

for($a=0;$a<=9;$a++){
echo " =&lt; <u>$a</u> &gt;=\n";
flush();
for($b=0;$b<=9;$b++){
for($c=0;$c<=9;$c++){
for($d=0;$d<=9;$d++){
for($e=0;$e<=9;$e++){
for($f=0;$f<=9;$f++){
$n=$a.$b.$c.$d.$e.$f;
$s=pow($a,5)+pow($b,5)+pow($c,5)+pow($d,5)+pow($e,5)+pow($f,5);
if($n==$s){
$st+=$s;
echo "<font>+$n $s $st</font>\n";
}
}
}
}
}
}
}
echo "R:$st";
}
function pe031(){ // R:           73 682
$mon=array(1,2,5,10,20,50,100,200);

$cnt=0;
echo "f:$f \n";flush();
for($h=0;$h<=1  ;$h++){ // 200
for($g=0;$g<=2  ;$g++){ // 100
for($f=0;$f<=4  ;$f++){ // 50
for($e=0;$e<=10 ;$e++){ // 20
for($d=0;$d<=20 ;$d++){ // 10
for($c=0;$c<=40 ;$c++){ // 5
for($b=0;$b<=100;$b++){ // 2
for($a=0;$a<=200;$a++){ // 1
$s=1*$a
  +2*$b
  +5*$c
  +10*$d
  +20*$e
  +50*$f
  +100*$g
  +200*$h
   ;
if($s>200){break(2);}
if($s==200){$cnt++;break;}

}}}}}}}}

echo "R:$cnt";
}
function pe032(){ // R:           45 228

for($a=1   ;$a<10   ;$a++){ // #
for($b=1000;$b<10000;$b++){ // ####
	if($a==$b){continue;}
	$res=$a*$b;
	if(strlen($res)>4){break;}
$ar=fnPasarAr($a.$b.$res);
sort($ar,SORT_REGULAR);
if($ar[0].$ar[1].$ar[2].$ar[3].$ar[4].$ar[5].$ar[6].$ar[7].$ar[8]=="123456789"){
$ar2[]=$res;
echo "<font>$a x $b=$res</font>\n";
}
}}

for($a=12  ;$a<100 ;$a++){ // ##
for($b=100 ;$b<1000;$b++){ // ###
	if($a==$b){continue;}
	$res=$a*$b;
	if(strlen($res)>4){break;}
$ar=fnPasarAr($a.$b.$res);
sort($ar,SORT_REGULAR);
if($ar[0].$ar[1].$ar[2].$ar[3].$ar[4].$ar[5].$ar[6].$ar[7].$ar[8]=="123456789"){
$ar2[]=$res;
echo "<font>$a x $b=$res</font>\n";
}
}}

$ar2=array_unique($ar2);
$s=array_sum($ar2);

echo "R:$s";

}
function pe033(){ // R:              100

$num=$den=1;
for($a=0;$a<10;$a++){
for($b=1;$b<10;$b++){
for($c=1;$c<10;$c++){
$uno=$a.$b;
$dos=$b.$c;
if($uno/$dos==$a/$c && $uno!=$dos){
$num*=$a;
$den*=$c;
echo "$uno/$dos = $a/$c \n";
}
}
}
}

for($a=0;$a<10;$a++){
for($b=1;$b<10;$b++){
for($c=1;$c<10;$c++){
$uno=$a.$b;
$dos=$c.$b;
if($uno/$dos==$a/$c && $uno!=$dos){
$num*=$a;
$den*=$c;
echo "$uno/$dos = $a/$c \n";
}
}
}
}

$num/=8;
$den/=8;

echo "R:$num/$den";

}
function pe034(){ // R:           40 730
$s=0;
for($i=145;$i<100000;$i++){
if(fnSumFactDigits($i)==$i){
$s+=$i;
echo "$i \n";
}
}

echo "R:$s";

}
function pe035(){ // R:               55

$c=0;
for($i=2;$i<10;$i++){
if(gmp_prob_prime($i)){
echo "$i \n";
$c++;
}
}

for($i=11;$i<1000000;$i+=6){
if(gmp_prob_prime($i)){
if(fnIsCircularPrim($i)){
echo "$i \n";
$c++;
}
}
}

for($i=13;$i<1000000;$i+=6){
if(gmp_prob_prime($i)){
if(fnIsCircularPrim($i)){
echo "$i \n";
$c++;
}
}
}

echo "R:$c";

}
function pe036(){ // R:          872 187
$s=0;
for($i=1;$i<1000000;$i+=2){
if(fnIsPalin($i)){
$n=decbin($i);
if(fnIsPalin($n)){
$s+=$i;
echo "\n$i ";
echo " (P)";
}
}
}
echo "R:$s";
}
function pe037(){ // R:          748 317

$s=0;

$ar=array(1,2,3,5,7,9);
$cnt=0;
$s=0;
for($a=0;$a<6;$a++){ // Two Ciphers
for($b=0;$b<6;$b++){
	$n=$ar[$a].$ar[$b];
	if(gmp_prob_prime($n)){
	// echo "$n \n";
	$n1=$ar[$a];
	$n2=$ar[$b];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	echo "$n _ $n1 $n2 \n";
	$cnt++;
	$s+=$n;
	}
	}
}
}echo "R:$cnt (2c) \n\n";
$ar=array(1,3,7,9);
for($a=0;$a<4;$a++){ // Three Ciphers
for($b=0;$b<4;$b++){
for($c=0;$c<4;$c++){
	$n=$ar[$a].$ar[$b].$ar[$c];
	if(gmp_prob_prime($n)){
	// echo "$n \n";
	$n1=$ar[$b].$ar[$c];
	$n2=$ar[$a].$ar[$b];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ $n1 $n2 \n";
	$n1=$ar[$c];
	$n2=$ar[$a];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	echo "$n _ _ $n1 $n2 \n";
	$cnt++;
	$s+=$n;
	}
	}
	}
}
}
}echo "R:$cnt (3c) \n\n";
for($a=0;$a<4;$a++){ // Four Ciphers
for($b=0;$b<4;$b++){
for($c=0;$c<4;$c++){
for($d=0;$d<4;$d++){
	$n=$ar[$a].$ar[$b].$ar[$c].$ar[$d];
	if(gmp_prob_prime($n)){
	// echo "$n \n";
	$n1=$ar[$b].$ar[$c].$ar[$d];
	$n2=$ar[$a].$ar[$b].$ar[$c];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ $n1 $n2 \n";
	$n1=$ar[$c].$ar[$d];
	$n2=$ar[$a].$ar[$b];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ $n1 $n2 \n";
	$n1=$ar[$d];
	$n2=$ar[$a];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	echo "$n _ _ _ $n1 $n2 \n";
	$cnt++;
	$s+=$n;
	}
	}
	}
	}
}
}
}
}echo "R:$cnt (4c) \n\n";
for($a=0;$a<4;$a++){ // Five Ciphers
for($b=0;$b<4;$b++){
for($c=0;$c<4;$c++){
for($d=0;$d<4;$d++){
for($e=0;$e<4;$e++){
	$n=$ar[$a].$ar[$b].$ar[$c].$ar[$d].$ar[$e];
	if(gmp_prob_prime($n)){
	// echo "$n \n";
	$n1=$ar[$b].$ar[$c].$ar[$d].$ar[$e];
	$n2=$ar[$a].$ar[$b].$ar[$c].$ar[$d];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ $n1 $n2 \n";
	$n1=$ar[$c].$ar[$d].$ar[$e];
	$n2=$ar[$a].$ar[$b].$ar[$c];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ $n1 $n2 \n";
	$n1=$ar[$d].$ar[$e];
	$n2=$ar[$a].$ar[$b];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ _ $n1 $n2 \n";
	$n1=$ar[$e];
	$n2=$ar[$a];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	echo "$n _ _ _ _ $n1 $n2 \n";
	$cnt++;
	$s+=$n;
	}
	}
	}
	}
	}
}
}
}
}
}echo "R:$cnt (5c) \n\n";
for($a=0;$a<4;$a++){ // Six Ciphers
for($b=0;$b<4;$b++){
for($c=0;$c<4;$c++){
for($d=0;$d<4;$d++){
for($e=0;$e<4;$e++){
for($f=0;$f<4;$f++){
	$n=$ar[$a].$ar[$b].$ar[$c].$ar[$d].$ar[$e].$ar[$f];
	if(gmp_prob_prime($n)){
	// echo "$n \n";
	$n1=$ar[$b].$ar[$c].$ar[$d].$ar[$e].$ar[$f];
	$n2=$ar[$a].$ar[$b].$ar[$c].$ar[$d].$ar[$e];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ $n1 $n2 \n";
	$n1=$ar[$c].$ar[$d].$ar[$e].$ar[$f];
	$n2=$ar[$a].$ar[$b].$ar[$c].$ar[$d];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ $n1 $n2 \n";
	$n1=$ar[$d].$ar[$e].$ar[$f];
	$n2=$ar[$a].$ar[$b].$ar[$c];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ _ $n1 $n2 \n";
	$n1=$ar[$e].$ar[$f];
	$n2=$ar[$a].$ar[$b];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	// echo " _ _ _ _ $n1 $n2 \n";
	$n1=$ar[$f];
	$n2=$ar[$a];
	if(gmp_prob_prime($n1) && gmp_prob_prime($n2)){
	echo "$n _ _ _ _ _ $n1 $n2 \n";
	$cnt++;
	$s+=$n;
	}
	}
	}
	}
	}
	}
}
}
}
}
}
}

echo "R:$cnt & $s (6c) \n\n";

}
function pe038(){ // R:      932 718 654

$mx=0;
for($i=1;$i<10000;$i++){
$cd="";
for($j=1;$j<100;$j++){
$cd.=$i*$j;
if(strlen($cd)>9){break;}
if(strlen($cd)==9){
$ar=fnPasarAr($cd);sort($ar,SORT_REGULAR);
if($ar[0].$ar[1].$ar[2].$ar[3].$ar[4].$ar[5].$ar[6].$ar[7].$ar[8]=="123456789"){
$mx=$cd;
echo "$cd\n";
}
break;
}
}
}

echo "R:$mx";

}

?>
<?php echo "\n\n".(microtime(true)-$_t0_)." s"; ?>
</pre>
