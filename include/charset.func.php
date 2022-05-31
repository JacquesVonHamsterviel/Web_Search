<?php
/*********************/
/*                   */
/*  Version : 5.1.0  */
/*  Author  : RM     */
/*  Comment : 071223 */
/*                   */
/*********************/

function utf8_to_gbk( $_obfuscate_lEJkeU8 )
{
		global $UC2GBTABLE;
		$_obfuscate_0ZRpoQQ = "";
		if ( empty( $_obfuscate_M7zu18TTxzhvA ) )
		{
				$_obfuscate_JTe7jJ4eGW8 = CODETABLEDIR."gb-unicode.table";
				$_obfuscate_YBY = fopen( $_obfuscate_JTe7jJ4eGW8, "rb" );
				while ( $A = fgets( $_obfuscate_YBY, 15 ) )
				{
						$UC2GBTABLE[hexdec( substr( $A, 7, 6 ) )] = hexdec( substr( $A, 0, 6 ) );
				}
				fclose( $_obfuscate_YBY );
		}
		$_obfuscate_0ZRpoQQ = "";
		$_obfuscate_7ypN_A = strlen( $_obfuscate_lEJkeU8 );
		$_obfuscate_7w = 0;
		for ( ;	$_obfuscate_7w < $_obfuscate_7ypN_A;	++$_obfuscate_7w	)
		{
				$_obfuscate_KQ = $_obfuscate_lEJkeU8[$_obfuscate_7w];
				$_obfuscate_s7U = decbin( ord( $_obfuscate_lEJkeU8[$_obfuscate_7w] ) );
				if ( strlen( $_obfuscate_s7U ) == 8 )
				{
						$_obfuscate_TsNQCdQ = strpos( decbin( ord( $_obfuscate_s7U ) ), "0" );
						$_obfuscate_XA = 0;
						for ( ;	$_obfuscate_XA < $_obfuscate_TsNQCdQ;	++$_obfuscate_XA	)
						{
								++$_obfuscate_7w;
								$_obfuscate_KQ .= $_obfuscate_lEJkeU8[$_obfuscate_7w];
						}
						$_obfuscate_KQ = utf8_to_unicode( $_obfuscate_KQ );
						if ( isset( $UC2GBTABLE[$_obfuscate_KQ] ) )
						{
								$_obfuscate_KQ = dechex( $UC2GBTABLE[$_obfuscate_KQ] + 32896 );
								$_obfuscate_0ZRpoQQ .= chr( hexdec( $_obfuscate_KQ[0].$_obfuscate_KQ[1] ) ).chr( hexdec( $_obfuscate_KQ[2].$_obfuscate_KQ[3] ) );
						}
						else
						{
								$_obfuscate_0ZRpoQQ .= "&#".$_obfuscate_KQ.";";
						}
				}
				else
				{
						$_obfuscate_0ZRpoQQ .= $_obfuscate_KQ;
				}
		}
		$_obfuscate_0ZRpoQQ = trim( $_obfuscate_0ZRpoQQ );
		return $_obfuscate_0ZRpoQQ;
}

function gbk_to_utf8( $_obfuscate_ruOWySY )
{
return iconv('GBK','UTF-8',$str);

}

function big5_to_gbk( $_obfuscate_yZrHHQ )
{
		global $BIG5_DATA;
		if ( empty( $_obfuscate_LncZbFyZ1wp9 ) )
		{
				$_obfuscate_JTe7jJ4eGW8 = CODETABLEDIR."big5-gb.table";
				$_obfuscate_YBY = fopen( $_obfuscate_JTe7jJ4eGW8, "rb" );
				$BIG5_DATA = fread( $_obfuscate_YBY, filesize( $_obfuscate_JTe7jJ4eGW8 ) );
				fclose( $_obfuscate_YBY );
		}
		$_obfuscate_Qp82 = strlen( $_obfuscate_yZrHHQ ) - 1;
		$_obfuscate_7w = 0;
		for ( ;	$_obfuscate_7w < $_obfuscate_Qp82;	++$_obfuscate_7w	)
		{
				$M = ord( $_obfuscate_yZrHHQ[$_obfuscate_7w] );
				if ( 128 <= $M )
				{
						$A = ord( $_obfuscate_yZrHHQ[$_obfuscate_7w + 1] );
						if ( $M == 161 && $A == 64 )
						{
								$_obfuscate_ruOWySY = "　";
						}
						else
						{
								$_obfuscate_8w = ( $M - 160 ) * 510 + ( $A - 1 ) * 2;
								$_obfuscate_ruOWySY = $BIG5_DATA[$_obfuscate_8w].$BIG5_DATA[$_obfuscate_8w + 1];
						}
						$_obfuscate_yZrHHQ[$_obfuscate_7w] = $_obfuscate_ruOWySY[0];
						$_obfuscate_yZrHHQ[$_obfuscate_7w + 1] = $_obfuscate_ruOWySY[1];
						++$_obfuscate_7w;
				}
		}
		return $_obfuscate_yZrHHQ;
}

function gbk_to_big5( $_obfuscate_yZrHHQ )
{
		global $GB_DATA;
		if ( empty( $_obfuscate_tPdAECH5Q ) )
		{
				$_obfuscate_JTe7jJ4eGW8 = CODETABLEDIR."gb-big5.table";
				$_obfuscate_YBY = fopen( $_obfuscate_JTe7jJ4eGW8, "rb" );
				$_obfuscate_H_c = fread( $_obfuscate_YBY, filesize( $_obfuscate_JTe7jJ4eGW8 ) );
				fclose( $_obfuscate_YBY );
		}
		$_obfuscate_Qp82 = strlen( $_obfuscate_yZrHHQ ) - 1;
		$_obfuscate_7w = 0;
		for ( ;	$_obfuscate_7w < $_obfuscate_Qp82;	++$_obfuscate_7w	)
		{
				$M = ord( $_obfuscate_yZrHHQ[$_obfuscate_7w] );
				if ( 128 <= $M )
				{
						$A = ord( $_obfuscate_yZrHHQ[$_obfuscate_7w + 1] );
						if ( $M == 161 && $A == 64 )
						{
								$_obfuscate_ugjg = "　";
						}
						else
						{
								$_obfuscate_8w = ( $M - 160 ) * 510 + ( $A - 1 ) * 2;
								$_obfuscate_ugjg = $GB_DATA[$_obfuscate_8w].$GB_DATA[$_obfuscate_8w + 1];
						}
						$_obfuscate_yZrHHQ[$_obfuscate_7w] = $_obfuscate_ugjg[0];
						$_obfuscate_yZrHHQ[$_obfuscate_7w + 1] = $_obfuscate_ugjg[1];
						++$_obfuscate_7w;
				}
		}
		return $_obfuscate_yZrHHQ;
}

function unicode_to_utf8( $_obfuscate_KQ )
{
		$_obfuscate_R2_b = "";
		if ( $_obfuscate_KQ < 128 )
		{
				$_obfuscate_R2_b .= $_obfuscate_KQ;
				return $_obfuscate_R2_b;
		}
		if ( $_obfuscate_KQ < 2048 )
		{
				$_obfuscate_R2_b .= 192 | $_obfuscate_KQ >> 6;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ & 63;
				return $_obfuscate_R2_b;
		}
		if ( $_obfuscate_KQ < 65536 )
		{
				$_obfuscate_R2_b .= 224 | $_obfuscate_KQ >> 12;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ >> 6 & 63;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ & 63;
				return $_obfuscate_R2_b;
		}
		if ( $_obfuscate_KQ < 2097152 )
		{
				$_obfuscate_R2_b .= 240 | $_obfuscate_KQ >> 18;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ >> 12 & 63;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ >> 6 & 63;
				$_obfuscate_R2_b .= 128 | $_obfuscate_KQ & 63;
		}
		return $_obfuscate_R2_b;
}

function utf8_to_unicode( $_obfuscate_KQ )
{
		switch ( strlen( $_obfuscate_KQ ) )
		{
		case 1 :
				return ord( $_obfuscate_KQ );
		case 2 :
				$_obfuscate_FQ = ( ord( $_obfuscate_KQ[0] ) & 63 ) << 6;
				$_obfuscate_FQ += ord( $_obfuscate_KQ[1] ) & 63;
				return $_obfuscate_FQ;
		case 3 :
				$_obfuscate_FQ = ( ord( $_obfuscate_KQ[0] ) & 31 ) << 12;
				$_obfuscate_FQ += ( ord( $_obfuscate_KQ[1] ) & 63 ) << 6;
				$_obfuscate_FQ += ord( $_obfuscate_KQ[2] ) & 63;
				return $_obfuscate_FQ;
		case 4 :
				$_obfuscate_FQ = ( ord( $_obfuscate_KQ[0] ) & 15 ) << 18;
				$_obfuscate_FQ += ( ord( $_obfuscate_KQ[1] ) & 63 ) << 12;
				$_obfuscate_FQ += ( ord( $_obfuscate_KQ[2] ) & 63 ) << 6;
				$_obfuscate_FQ += ord( $_obfuscate_KQ[3] ) & 63;
				return $_obfuscate_FQ;
		}
}

function asc_to_pinyin( $_obfuscate_Vikx, &$_obfuscate_0ZNCtmY )
{
		if ( $_obfuscate_Vikx < 128 )
		{
				return chr( $_obfuscate_Vikx );
		}
		if ( isset( $_obfuscate_0ZNCtmY[$_obfuscate_Vikx] ) )
		{
				return $_obfuscate_0ZNCtmY[$_obfuscate_Vikx];
		}
		foreach ( $_obfuscate_0ZNCtmY as $_obfuscate_0W8 => $_obfuscate_8w )
		{
				if ( !( $_obfuscate_Vikx <= $_obfuscate_0W8 ) )
				{
						continue;
				}
				return $_obfuscate_8w;
		}
}

function gbk_to_pinyin( $_obfuscate_so7 )
{
		$A = strlen( $_obfuscate_so7 );
		$_obfuscate_7w = 0;
		$_obfuscate_0ZNCtmY = array( );
		$_obfuscate_r5Q = array( );
		$_obfuscate_JTe7jJ4eGW8 = CODETABLEDIR."gb-pinyin.table";
		$_obfuscate_YBY = fopen( $_obfuscate_JTe7jJ4eGW8, "r" );
		while ( !feof( $_obfuscate_YBY ) )
		{
				$_obfuscate_8w = explode( "-", fgets( $_obfuscate_YBY, 32 ) );
				$_obfuscate_0ZNCtmY[intval( $_obfuscate_8w[1] )] = trim( $_obfuscate_8w[0] );
		}
		fclose( $_obfuscate_YBY );
		ksort( &$_obfuscate_0ZNCtmY );
		while ( $_obfuscate_7w < $A )
		{
				$_obfuscate_juwe = ord( $_obfuscate_so7[$_obfuscate_7w] );
				if ( 128 <= $_obfuscate_juwe )
				{
						$_obfuscate_Vikx = abs( $_obfuscate_juwe * 256 + ord( $_obfuscate_so7[$_obfuscate_7w + 1] ) - 65536 );
						$_obfuscate_7w += 1;
				}
				else
				{
						$_obfuscate_Vikx = $_obfuscate_juwe;
				}
				$_obfuscate_r5Q[] = asc_to_pinyin( $_obfuscate_Vikx, &$_obfuscate_0ZNCtmY );
				++$_obfuscate_7w;
		}
		return $_obfuscate_r5Q;
}

define( "CODETABLEDIR", PATH."include/encoding/" );
?>
