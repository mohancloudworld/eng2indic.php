<?php
header( 'Content-Type: text/html; charset=utf-8' ); 

$telugu_dict = array(

#Various signs:
"ny~"		=> '\u0C01', # ఁ ***
"m~"		=> '\u0C02', # ం *** 
"M~"		=> '\u0C02', # ం *** copied
"n~"		=> '\u0C02', # ం *** copied
"a:~"		=> '\u0C03', # ః ***
"ah~"		=> '\u0C03', # ః *** copied

# Independent vowels:
#""		=> '\u0C04', # RESERVED
"~a"		=> '\u0C05', # అ
"~aa"		=> '\u0C06', # ఆ
"~A"		=> '\u0C06', # ఆ
"~i"		=> '\u0C07', # ఇ
"~ii"		=> '\u0C08', # ఈ
"~I"		=> '\u0C08', # ఈ
"~u"		=> '\u0C09', # ఉ
"~uu"		=> '\u0C0A', # ఊ
"~U"		=> '\u0C0A', # ఊ
"~rru"	=> '\u0C0B', # ఋ
"~Ru"		=> '\u0C0B', # ఋ
"~llX"	=> '\u0C0C', # ఌ ***
#""		=> '\u0C0D', # RESERVED
"~e"		=> '\u0C0E', # ఎ
"~ee"		=> '\u0C0F', # ఏ
"~E"		=> '\u0C0F', # ఏ
"~ai"		=> '\u0C10', # ఐ
#""		=> '\u0C11', # RESERVED
"~o"		=> '\u0C12', # ఒ
"~oo"		=> '\u0C13', # ఓ
"~O"		=> '\u0C13', # ఓ
"~au"		=> '\u0C14', # ఔ

# Consonants:
"k+"		=> '\u0C15', # క
"kh+"		=> '\u0C16', # ఖ
"K+"		=> '\u0C16', # ఖ
"g+"		=> '\u0C17', # గ
"G+"		=> '\u0C18', # ఘ
"ngg+"		=> '\u0C19', # ఙ ***
"nG+"		=> '\u0C19', # ఙ ***
"ch+"		=> '\u0C1A', # చ
"chh+"	=> '\u0C1B', # ఛ
"Ch+"	=> '\u0C1B', # ఛ
"j+"		=> '\u0C1C', # జ
"jh+"		=> '\u0C1D', # ఝ
"J+"		=> '\u0C1D', # ఝ
"nny+"		=> '\u0C1E', # ఞ ***
"Ny+"		=> '\u0C1E', # ఞ ***
"t+"		=> '\u0C1F', # ట
"tt+"		=> '\u0C20', # ఠ ***
"T+"		=> '\u0C20', # ఠ ***
"d+"		=> '\u0C21', # డ 
"dd+"		=> '\u0C22', # ఢ 
"D+"		=> '\u0C22', # ఢ 
"nnn+"	=> '\u0C23', # ణ 
"N+"	=> '\u0C23', # ణ 
"th+"		=> '\u0C24', # త
"tth+"	=> '\u0C25', # థ
"Th+"	=> '\u0C25', # థ
"dh+"		=> '\u0C26', # ద
"ddh+"	=> '\u0C27', # ధ
"Dh+"	=> '\u0C27', # ధ
"n+"		=> '\u0C28', # న
#""		=> '\u0C29', # RESERVED
"p+"		=> '\u0C2A', # ప
"ph+"		=> '\u0C2B', # ఫ ***
"Ph+"		=> '\u0C2B', # ఫ ***
"f+"		=> '\u0C2B', # ఫ *** copied
"b+"		=> '\u0C2C', # బ
"bh+"		=> '\u0C2D', # భ
"B+"		=> '\u0C2D', # భ
"m+"		=> '\u0C2E', # మ
"y+"		=> '\u0C2F', # య
"r+"		=> '\u0C30', # ర
"rrr+"	=> '\u0C31', # ఱ ***
"R+"	=> '\u0C31', # ఱ ***
"l+"		=> '\u0C32', # ల
"lll+"	=> '\u0C33', # ళ  ***
"L+"	=> '\u0C33', # ళ  ***
""			=> '\u0C34', # RESERVED
"v+"		=> '\u0C35', # వ
"w+"		=> '\u0C35', # వ copied
"sh+"		=> '\u0C36', # శ
"ssh+"	=> '\u0C37', # ష ***
"Sh+"	=> '\u0C37', # ష *** copied
"s+"		=> '\u0C38', # స
"h+"		=> '\u0C39', # హ
""			=> '\u0C3A', # RESERVED
""			=> '\u0C3B', # RESERVED
""			=> '\u0C3C', # RESERVED

# Addition for Sanskrit:
""			=> '\u0C3D', # ఽ

# Dependent vowel signs:
"+a" 		=> '',       # ADDED
"+aa"		=> '\u0C3E', # ా
"+A"		=> '\u0C3E', # ా
"+i"		=> '\u0C3F', # ి
"+ii"		=> '\u0C40', # ీ
"+I"		=> '\u0C40', # ీ
"+u"		=> '\u0C41', # ు
"+uu"		=> '\u0C42', # ూ
"+U"		=> '\u0C42', # ూ
"+ru"		=> '\u0C43', # ృ
"+rru"	=> '\u0C44', # ౄ
"+Ru"	=> '\u0C44', # ౄ
""			=> '\u0C45', # RESERVED
"+e"		=> '\u0C46', # ె
"+ee"		=> '\u0C47', # ే
"+E"		=> '\u0C47', # ే
"+ai"		=> '\u0C48', # ై
""			=> '\u0C49', # RESERVED
"+o"		=> '\u0C4A', # ొ
"+oo"		=> '\u0C4B', # ో
"+O"		=> '\u0C4B', # ో
"+au"		=> '\u0C4C', # ౌ
"+ou"		=> '\u0C4C', # ౌ copied

# Virama:
"VIRAMA"	=> '\u0C4D', # ్
""			=> '\u0C4E', # RESERVED
""			=> '\u0C4F', # RESERVED
""			=> '\u0C50', # RESERVED
""			=> '\u0C51', # RESERVED
""			=> '\u0C52', # RESERVED
""			=> '\u0C53', # RESERVED
""			=> '\u0C54', # RESERVED

# Various signs:
""		=> '\u0C55', # ౕ
"ai"	=> '\u0C56', # ౖ ***
""		=> '\u0C57', # RESERVED

# Historic phonetic variants:
"tsa"	=> '\u0C58', # ౘ
"dza"	=> '\u0C59', # ౙ
""		=> '\u0C5A', # RESERVED
""		=> '\u0C5B', # RESERVED
""		=> '\u0C5C', # RESERVED
""		=> '\u0C5D', # RESERVED
""		=> '\u0C5E', # RESERVED
""		=> '\u0C5F', # RESERVED

# Additional vowels for Sanskrit:
"rrX"		=> '\u0C60', # ౠ
"llX"	=> '\u0C61', # ౡ ***

# Dependent vowels:
"+lX"		=> '\u0C62', # ౢ ***
"+llX"	=> '\u0C63', # ౣ ***
""		=> '\u0C64', # RESERVED
""		=> '\u0C65', # RESERVED

# Digits:
"0"		=> '\u0C66', # ౦
"1"		=> '\u0C67', # ౧
"2"		=> '\u0C68', # ౨
"3"		=> '\u0C69', # ౩
"4"		=> '\u0C6A', # ౪
"5"		=> '\u0C6B', # ౫
"6"		=> '\u0C6C', # ౬
"7"		=> '\u0C6D', # ౭
"8"		=> '\u0C6E', # ౮
"9"		=> '\u0C6F', # ౯
""		=> '\u0C70', # RESERVED
""		=> '\u0C71', # RESERVED
""		=> '\u0C72', # RESERVED
""		=> '\u0C73', # RESERVED
""		=> '\u0C74', # RESERVED
""		=> '\u0C75', # RESERVED
""		=> '\u0C76', # RESERVED
""		=> '\u0C77', # RESERVED

# Telugu fractions and weights:
""		=> '\u0C78', # ౸
""		=> '\u0C79', # ౹
""		=> '\u0C7A', # ౺
""		=> '\u0C7B', # ౻
""		=> '\u0C7C', # ౼
""		=> '\u0C7D', # ౽
""		=> '\u0C7E', # ౾
""		=> '\u0C7F', # ౿

# Sign: Manually added from Devanagari
"~om"		=> '\u0950', # ॐ
"~aum"		=> '\u0950' # ॐ
);


$devanagari_dict = array(
#Various signs:
"ny~"		=> '\u0900', #  ऀ ***
#"Nh"		=> '\u0901', # ँ ***
#"m~"		=> '\u0901', # ँ ***
#"M~"		=> '\u0901', # ँ ***
"m~"		=> '\u0902', # ं
"M~"		=> '\u0902', # ं
#"n~"		=> '\u0902', # ं copied **********
"a:~"		=> '\u0903', # ः
"ah~"		=> '\u0903', # ः copied

# Independent vowels:
"~NN"		=> '\u0904', # ऄ ***
"~a"		=> '\u0905', # अ
"~aa"		=> '\u0906', # आ
"~A"		=> '\u0906', # आ
"~i"		=> '\u0907', # इ
"~ii"		=> '\u0908', # ई
"~I"		=> '\u0908', # ई
"~u"		=> '\u0909', # उ
"~uu"		=> '\u090A', # ऊ 
"~U"		=> '\u090A', # ऊ 
"~rru"	=> '\u090B', # ऋ ***
"~Ru"		=> '\u090B', # ऋ ***
#"~llx"	=> '\u090C', # ऌ ***
#"~li"		=> '\u090C', # ऌ ***
#"~En"		=> '\u090D', # ऍ ***
"~e"		=> '\u090E', # ऎ ***
"~ee"		=> '\u090F', # ए
"~E"		=> '\u090F', # ए
"~ai"		=> '\u0910', # ऐ
#"~Ao"		=> '\u0911', # ऑ ***
"~o"		=> '\u0912', # ऒ ***
"~oo"		=> '\u0913', # ओ
"~O"		=> '\u0913', # ओ
"~au"		=> '\u0914', # औ

# Consonants:
"k+"		=> '\u0915', # क
"kh+"		=> '\u0916', # ख
"K+"		=> '\u0916', # ख
"g+"		=> '\u0917', # ग
"gh+"		=> '\u0918', # घ
"G+"		=> '\u0918', # घ
"ngg+"	=> '\u0919', # ङ ***
"nG+"		=> '\u0919', # ङ ***
"ch+"		=> '\u091A', # च
"chh+"		=> '\u091B', # छ
"Ch+"		=> '\u091B', # छ
"j+"		=> '\u091C', # ज
"jh+"		=> '\u091D', # झ
"J+"		=> '\u091D', # झ
"nny+"		=> '\u091E', # ञ
"Ny+"		=> '\u091E', # ञ
"t+"		=> '\u091F', # ट
"tt+"		=> '\u0920', # ठ
"T+"		=> '\u0920', # ठ
"d+"		=> '\u0921', # ड
"dd+"	=> '\u0922', # ढ
"D+"	=> '\u0922', # ढ
"nnn+"		=> '\u0923', # ण
"N+"		=> '\u0923', # ण
"th+"		=> '\u0924', # त
"tth+"		=> '\u0925', # थ
"Th+"		=> '\u0925', # थ
"dh+"		=> '\u0926', # द
"ddh+"		=> '\u0927', # ध
"Dh+"		=> '\u0927', # ध
"n+"		=> '\u0928', # न
"nnnn+"	=> '\u0929', # ऩ ***
"NNN+"	=> '\u0929', # ऩ ***
"p+"		=> '\u092A', # प
"ph+"		=> '\u092B', # फ
"Ph+"		=> '\u092B', # फ
"f+"		=> '\u092B', # फ
"b+"		=> '\u092C', # ब
"bh+"		=> '\u092D', # भ
"B+"		=> '\u092D', # भ
"m+"		=> '\u092E', # म
"y+"		=> '\u092F', # य
"r+"		=> '\u0930', # र
"rrr+"	=> '\u0931', # ऱ
"R+"		=> '\u0931', # ऱ
"l+"		=> '\u0932', # ल
"L+"		=> '\u0933', # ळ
"lll+"		=> '\u0934', # ऴ
"LL+"		=> '\u0934', # ऴ
"v+"		=> '\u0935', # व
"w+"		=> '\u0935', # व
"sh+"		=> '\u0936', # श
"ssh+"		=> '\u0937', # श
"Sh+"		=> '\u0937', # श
"s+"		=> '\u0938', # स
"h+"		=> '\u0939', # ह

# Dependent vowel signs for Kashmiri:
"+oe"		=> '\u093A', # ऺ ***
"+ooe"	=> '\u093B', # ऻ ***

# Various signs:
"+NAA"	=> '\u093C', # ़ ***
"+aA"		=> '\u093D', # ऽ ***

# Dependent vowel signs:
"+a" 		=> '',       # ADDED
"+aa"		=> '\u093E', # ा
"+A"		=> '\u093E', # ा
"+i"		=> '\u093F', # ि
"+ii"		=> '\u0940', # ी
"+I"		=> '\u0940', # ी
"+u"		=> '\u0941', # ु
"+uu"		=> '\u0942', # ू
"+U"		=> '\u0942', # ू
"+ru"		=> '\u0943', # ृ ***
"+rru"	=> '\u0944', # ॄ ***
"+Ru"	=> '\u0944', # ॄ ***
"+en"		=> '\u0945', # ॅ ***
"+e"		=> '\u0946', # ॆ
"+ee"		=> '\u0947', # े
"+E"		=> '\u0947', # े
"+ai"		=> '\u0948', # ै
"+N4"		=> '\u0949', # ॉ ***
"+o"		=> '\u094A', # ॊ
"+oo"		=> '\u094B', # ो
"+O"		=> '\u094B', # ो
"+au"		=> '\u094C', # ौ
"+ou"		=> '\u094C', # ौ

# Virama (halant):
"VIRAMA"	=> '\u094D', # ् ***

#Dependent vowel signs:
"+NN"	=> '\u094E', # ॎ ***
"+aw"	=> '\u094F', # ॏ ***

# Sign:
"~om"		=> '\u0950', # ॐ
"~aum"		=> '\u0950', # ॐ

# Vedic tone marks:
"N7"		=> '\u0951', #  ॑
"N8"		=> '\u0952', #  ॒

# Accent marks:
"N9"		=> '\u0953', # ॓ ***
"NA"		=> '\u0954', # ॔ ***

#Dependent vowel sign:
"+eee"	=> '\u0955', # ॕ ***

# Dependent vowel signs for Kashmiri:
"+ue"		=> '\u0956', #  ॖ ***
"+uue"	=> '\u0957', #  ॗ ***


# Additional consonants:
"q+"		=> '\u0958', # क़
"khh+"	=> '\u0959', # ख़
"ghh+"	=> '\u095A', # ग़
"z+"		=> '\u095B', # ज़
"ddd+"	=> '\u095C', # ड़
"Dd+"		=> '\u095C', # ड़
"dddh+"	=> '\u095D', # ढ़
"Ddh+"	=> '\u095D', # ढ़
"ff+"		=> '\u095E', # फ़
"F+"		=> '\u095E', # फ़
"yy+"		=> '\u095F', # य़
"Y+"		=> '\u095F', # य़

# Additional vowels for Sanskrit:
"+tr"	=> '\u0960', # ॠ
"+NB"		=> '\u0961', # ॡ
"+NC"		=> '\u0962', # ॢ
"+ND"		=> '\u0963', # ॣ

#Generic punctuation for scripts of India:
","		=> '\u0964', # ।
"."		=> '\u0965', # ॥

# Digits:
"0"		=> '\u0966', # ०
"1"		=> '\u0967', # १
"2"		=> '\u0968', # २
"3"		=> '\u0969', # ३
"4"		=> '\u096A', # ३
"5"		=> '\u096B', # ५
"6"		=> '\u096C', # ६
"7"		=> '\u096D', # ७
"8"		=> '\u096E', # ७
"9"		=> '\u096F', # ९

# Abbreviation sign:
""	=> '\u0970', # ॰ ***
""		=> '\u0971', # ॱ ***
# Independent vowel for Marathi:
""		=> '\u0972', # ॲ ***

# Independent vowels for Kashmiri:
#"oe"		=> '\u0973', # ॳ ***
#"ooe"		=> '\u0974', # ॴ ***
#"aw"		=> '\u0975', # ॵ ***
#"ue"		=> '\u0976', # ॶ ***
#"uue"		=> '\u0977', # ॷ ***
#""	=> '\u0978', #   *** RESERVED

# Additional consonants:
#"zha"		=> '\u0979', # ॹ ***
#"jjya"	=> '\u097A', # ॺ ***
#"gga"		=> '\u097B', # ॺ ***
#"jja"		=> '\u097C', # ॼ ***
#"?"		=> '\u097D', # ॽ ***
#"ddda"	=> '\u097E', # ॾ ***
#"bba"		=> '\u097F'  # ॿ ***
);

# *** May improve if implemented as a state machine, logic depending on previous & next blk-Types ***

function convertNextBlk($lang_dict, $inp, $word_start_p, $prev_Type_p, $vovel_needed_p){
	$MAX=3; # *** set this
	$debug=0;
	$indx=0;
	$out = "";
	$Type = "NONE";
	$vovel_needed = $vovel_needed_p;
	$prev_Type = $prev_Type_p;
	$word_start = $word_start_p;
	$blkLen=$MAX;
	while($blkLen > 0){
		#echo substr($inp, $indx, $blkLen)." \n";
		# selecting block
		if((strlen($inp)-$indx) >= $blkLen){
			$blk= substr($inp, $indx, $blkLen);
		}
		else{
			$blk = substr($inp, $indx, $blkLen);
		}
		if($debug){echo "<br>blk...:".$blk." ".$word_start." ".$vovel_needed."<br>";}
		# Translating
		# case-insensitive search, at word beginning
		# Independent vowels
		if( ($word_start == true) && ($vovel_needed == false) && (array_key_exists(strtolower("~".$blk), $lang_dict)) ){ # lower-case
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Independent";
			$vovel_needed = 0;
			$out .= $lang_dict[strtolower("~".$blk)];
			if($debug){echo "0: ".strtolower("~".$blk), $lang_dict[strtolower("~".$blk)]."<br>";}
			break;
		}
		# Special Symbols
		else if( ($prev_Type != "Consonants") && ($prev_Type != "NoMatch") && ($word_start == true) && 
		      (array_key_exists(strtolower($blk."~"), $lang_dict)) && 
		      (convertNextBlkType($lang_dict, substr($inp,$blkLen), 0, 1) != "Vowel") &&
		      (($inp[0] != "n") || (($inp[0] == "n") && ((convertNextBlkType($lang_dict, substr($inp, $blkLen), 0, 1) != "NoMatch"))))
		      ) { # lower-case
			#if(vovel_needed):out+=lang_dict["VIRAMA"];
			$Type = "Independent"; #"Vowel";
			$vovel_needed=0;
			$out .= $lang_dict[strtolower($blk."~")];
			if($debug){echo "1:", strtolower($blk), $lang_dict[strtolower($blk."~")]."<br>";}
			break;
		}	
		# Dependent vowels
		else if( ($word_start == true) && ($vovel_needed) && (array_key_exists(strtolower("+".$blk), $lang_dict)) ){ # lower-case
			$Type = "Vowel";
			$vovel_needed = 0;
			$out .= $lang_dict[strtolower("+".$blk)];
			if($debug){echo "3: ".strtolower($blk)." ".$lang_dict[strtolower("+".$blk)]."<br>";}
			break;
		}
		# Consonants
		else if( ($word_start == true) && (array_key_exists(strtolower($blk."+"), $lang_dict))){ # lower-case
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Consonants";
			$vovel_needed=1;
			$out .= $lang_dict[strtolower($blk."+")];
			if($debug){echo "2: ".strtolower($blk)." ".$lang_dict[strtolower($blk."+")];}
			break;
		}
		# Others 
		else if( ($word_start == true) and (array_key_exists(strtolower($blk), $lang_dict))){ # lower-case
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Other";
			$vovel_needed=0;
			$out .= $lang_dict[strtolower($blk)];
			if($debug){echo "4: ".strtolower($blk)." ".$lang_dict[strtolower($blk)];}
			break;
		}
		# Independent vowels
		else if( ($vovel_needed == false) && (array_key_exists(("~".$blk), $lang_dict)) ){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Independent";
			$vovel_needed=0;
			$out .= $lang_dict["~".$blk];
			if($debug){echo "5: "."~".$blk." ".$lang_dict["~".$blk];}
			break;
		}
		# Special Symbols
		else if( ($prev_Type != "Consonants")  && ($prev_Type != "NoMatch") && array_key_exists(($blk."~"), $lang_dict) && 
		      (convertNextBlkType($lang_dict, substr($inp,$blkLen), 0, 1) != "Vowel") &&
		      (($inp[0] != "n") || (($inp[0] == "n") && ((convertNextBlkType($lang_dict, substr($inp,$blkLen), 0, 1) != "NoMatch"))))
		      ){
			#if(vovel_needed):out+=lang_dict["VIRAMA"]
			$Type = "Independent"; #"Vowel"
			$vovel_needed=0;
			$out .= $lang_dict[$blk."~"];
			if($debug){echo "6: ".$blk." ".$lang_dict[$blk."~"];}
			break;
		}
		# Dependent vowels
		else if(($vovel_needed) && (array_key_exists(("+".$blk), $lang_dict)) ){
			$Type = "Vowel";
			$vovel_needed=0;
			$out .= $lang_dict["+".$blk];
			if($debug){echo "8: ".$blk." ".$lang_dict["+".$blk];}
			break;
		}
		# Consonants
		else if(array_key_exists(($blk."+"), $lang_dict)){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Consonants";
			$vovel_needed=1;
			$out .= $lang_dict[$blk."+"];
			if($debug){echo "7: ".$blk." ".$lang_dict[$blk."+"];}
			break;
		}
		# Others 
		else if(array_key_exists($blk, $lang_dict)){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Other";
			$vovel_needed = 0;
			$out .= $lang_dict[$blk];
			if($debug){echo "9: ".$blk." ".$lang_dict[$blk]."<br>";}
			break;
		}
		# No match for the taken block 
		else{
			$blkLen -= 1;
		}
	}
	if($blkLen){
		if($debug){echo "Match ".$vovel_needed."<br>";}
		$word_start = false;
		$indx += $blkLen;
	}
	else{ # no match found
		if($vovel_needed){
			$out .= $lang_dict["VIRAMA"];
		}
		if($debug){echo "No match ".$vovel_needed."<br>";}
		$Type = "NoMatch";
		$out .= $inp[$indx];
		$word_start = true;
		$vovel_needed=0;
		$indx+=1;
	}	
	if($debug){echo "<br>returning ".$out." ".$blkLen." ".$Type." ".$vovel_needed."<br>";}
	return array($out, $blkLen, $Type, $vovel_needed);
};





function convertNextBlkType($lang_dict, $inp, $word_start_p, $vovel_needed_p){
	$MAX=3; # *** set this
	$debug=0;
	$indx=0;
	$out = "";
	$Type = "NONE";
	$vovel_needed = $vovel_needed_p;
	$word_start = $word_start_p;
	$blkLen=$MAX;
	if($debug){echo "<br>".$indx." ".$out;}
	while(($inp != "") && ($blkLen > 0)){
		# selecting block
		if((strlen($inp) - $indx) >= $blkLen){
			$blk=substr($inp, $indx, $indx+$blkLen);
		}
		else{
			$blk=substr($inp, $indx, $indx+$blkLen);
		}
		# Translating
		# case-insensitive search, at word beginning
		# Independent vowels
		if( ($word_start == true) && ($vovel_needed == false) && (array_key_exists(strtolower("~".$blk), $lang_dict)) ){ # lower-case
			if($vovel_needed){
				$out .=$lang_dict["VIRAMA"];
			}
			$Type = "Independent";
			$vovel_needed=0;
			$out.=$lang_dict[strtolower("~".$blk)];
			if($debug){echo "4:"." "."~".strtolower($blk)." ".$lang_dict[strtolower("~".$blk)];}
			break;
		}
		# Consonants
		else if( ($word_start == true) && (array_key_exists(strtolower($blk."+"), $lang_dict)) ){ # lower-case
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Consonants";
			$vovel_needed=1;
			$out .= $lang_dict[strtolower($blk)."+"];
			if($debug){echo "5:"." ".strtolower($blk)." ".$lang_dict[strtolower($blk)."+"];}
			break;
		}
		# Dependent vowels
		else if( ($word_start == true) && ($vovel_needed) && (array_key_exists("+".strtolower($blk), $lang_dict)) ){ # lower-case
			$Type = "Vowel";
			$vovel_needed=0;
			$out.=$lang_dict["+".strtolower($blk)];
			if($debug){echo "6:"." ".strtolower($blk)." ".$lang_dict["+".strtolower($blk)];}
			break;
		}
		# Others 
		else if( ($word_start == true) && (array_key_exists(strtolower($blk), $lang_dict)) ){ # lower-case
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Other";
			$vovel_needed=0;
			$out .= $lang_dict[strtolower($blk)];
			if($debug){echo "7:"." ".strtolower($blk)." ".$lang_dict[strtolower($blk)];}
			break;
		}
		# Independent vowels
		else if( ($vovel_needed == false) && (array_key_exists(("~".$blk), $lang_dict)) ){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Independent";
			$vovel_needed=0;
			$out.=$lang_dict["~".$blk];
			if($debug){echo "0:"." "."~".$blk." ".$lang_dict["~".$blk];}
			break;
		}
		# Consonants
		else if(array_key_exists(($blk."+"), $lang_dict)){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Consonants";
			$vovel_needed=1;
			$out .= $lang_dict[$blk+"+"];
			if($debug){echo "1:"." ".$blk." ".$lang_dict[$blk."+"];}
			break;
		}
		# Dependent vowels
		else if(($vovel_needed) && (array_key_exists(("+".$blk), $lang_dict)) ){
			$Type = "Vowel";
			$vovel_needed=0;
			$out.=$lang_dict["+".$blk];
			if($debug){echo "2:"." ".$blk." ".$lang_dict["+".$blk];}
			break;
		}
		# Others 
		else if(array_key_exists(($blk), $lang_dict)){
			if($vovel_needed){
				$out .= $lang_dict["VIRAMA"];
			}
			$Type = "Other";
			$vovel_needed=0;
			$out .= $lang_dict[$blk];
			if($debug){echo "3:"." ".$blk." ".$lang_dict[$blk];}
			break;
		}
		# No match for the taken block 
		else{
			$blkLen -= 1;
		}
	}
	if($blkLen){
		if($debug){echo "Match"." ".$vovel_needed;}
		$word_start = false;
		$indx.=$blkLen;
	}
	else{ # no match found
		if($vovel_needed){
			$out.=$lang_dict["VIRAMA"];
		}
		if($debug){echo "No match"." ".$vovel_needed;}
		$Type = "NoMatch";
		$out.=$inp[$indx];
		$word_start = true;
		$vovel_needed=0;
		$indx+=1;
	}	
	if($debug){echo "<br>returning"." ".$out." ".$blkLen." ".$Type." ".$vovel_needed;}
	#echo "Type:",Type
	return $Type;
};












if($_POST['Language'] == 'devanagari'){$lang_dict = $devanagari_dict;}
elseif($_POST['Language'] == 'telugu'){$lang_dict = $telugu_dict;}

$inp = $_POST['inp']; 


$indx=0;
$out = "";
$vovel_needed_p = false;
$word_start_p = true;
$prev_Type = "NoMatch";
while ($indx <  strlen($inp)){
	list($blk, $blkLen, $Type, $vovel_needed_p) = convertNextBlk($lang_dict, substr($inp, $indx), $word_start_p, $prev_Type, $vovel_needed_p);
	$out .= $blk;
	if($Type == "NoMatch"){
		#echo substr($inp, $indx, $blkLen).": ***** NoMatch ($blkLen)\n";
		$indx += 1;
		$word_start_p = true;
	}
	else{
		#echo substr($inp, $indx, $blkLen).": ".$blk." Match ($blkLen)\n";
		$indx += $blkLen;
		$word_start_p = false;
	}
	$prev_Type = $Type;
}
if($vovel_needed_p){
	$out .= $lang_dict["VIRAMA"];
}
$vovel_needed_p=0;
//echo "<br>".$out;
#echo "<br>".json_decode('"'.$out.'"')."<br>";
?>

<form action="lang.php" method="POST">
<p>
Select the Language:
<select name="Language" <?php echo $_POST['Language']; ?>>
  <option value="devanagari">Devanagari</option>
  <option value="telugu">Telugu</option>
</select>
</p>
<TEXTAREA NAME="inp" ROWS=20 COLS=50 ><?php echo $_POST['inp']; ?></TEXTAREA>
<TEXTAREA NAME="out2" ROWS=20 COLS=50 ><?php echo json_decode('"'.$out.'"'); ?></TEXTAREA>
<input type="submit" value="Submit">
</form>

