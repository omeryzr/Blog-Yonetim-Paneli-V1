﻿<?php
       header('Content-Type: text/html; charset=utf-8');
	   session_start();
	   
	   
	   ##Hata Gizleme##
	   error_reporting(0);
	   ##Baglantı Değişkenleri##
	   $host ="localhost";
       $user ="root";
       $pass ="";
       $db   ="yonetimpaneliv1";

       ##Mysql Baglantıları##
       $baglan=mysql_connect($host,$user,$pass) or die(mysql_error());
       ##Veritabanı Baglantıları##
       mysql_select_db($db,$baglan) or die(mysql_error());
       ##Karakter Sorunu##
	 mysql_query("SET NAMES 'latin5'");
     mysql_query("SET character_set_connection = 'latin5'");
     mysql_query("SET character_set_client = 'latin5'");
     mysql_query("SET character_set_results = 'latin5'");
	   ##Genel Ayarlar##
	   $query=mysql_query("select * from ayarlar");
	   $ayar=mysql_fetch_array($query);
	   
	          ##Sabitler##
			  define("PATH",realpath("."));
              define("URL",$ayar["site_url"]);
              define("TEMA_URL",$ayar["site_url"]."/tema/".$ayar["site_tema"]);
              define("TEMA",PATH."/tema/",$ayar["site_tema"]);			  




?>