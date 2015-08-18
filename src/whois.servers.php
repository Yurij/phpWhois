<?php
/**
 * Whois servers list
 * 
 * This class supposed to be instantiated for using the phpWhois library
 * 
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2
 * @license
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 * 
 * @link http://phpwhois.pw
 * @copyright Copyright (C)1999,2005 easyDNS Technologies Inc. & Mark Jeftovic
 * @copyright Maintained by David Saez
 * @copyright Copyright (c) 2014 Dmitry Lukashin
 */

return array(
'DATA' => array(
    'bz'       => 'gtld',
    'com'      => 'gtld',
    'jobs'     => 'gtld',
    'li'       => 'ch',
    'net'      => 'gtld',
    'su'       => 'ru',
    'tv'       => 'gtld',
    'za.org'   => 'zanet',
    'za.net'   => 'zanet',
    // Punicode
    'xn--p1ai' => 'ru',
),

/* Non UTF-8 servers */

'NON_UTF8' => array(
    'br.whois-servers.net'  => 1,
    'ca.whois-servers.net'  => 1,
    'cl.whois-servers.net'  => 1,
    'hu.whois-servers.net'  => 1,
    'is.whois-servers.net'  => 1,
    'pt.whois-servers.net'  => 1,
    'whois.interdomain.net' => 1,
    'whois.lacnic.net'      => 1,
    'whois.nicline.com'     => 1,
    'whois.ripe.net'        => 1,
),

/* If whois Server needs any parameters, enter it here */

'WHOIS_PARAM' => array(
    'com.whois-servers.net' => 'domain =$',
    'net.whois-servers.net' => 'domain =$',
    'de.whois-servers.net'  => '-T dn,ace $',
    'jp.whois-servers.net'  => 'DOM $/e',
),

/* TLD's that have special whois servers or that can only be reached via HTTP */

'WHOIS_SPECIAL' => array(
	'abb' => 'whois.nic.abb',
	'abbott' => 'whois.afilias-srs.net',
	'abogado' => 'whois-dub.mm-registry.com',
	'ac' => 'whois.nic.ac',
	'academy' => 'whois.donuts.co',
	'accenture' => 'whois.nic.accenture',
	'accountant' => 'whois.nic.accountant',
	'accountants' => 'whois.donuts.co',
	'active' => 'whois.afilias-srs.net',
	'actor' => 'whois.unitedtld.com',
	'ad' => '',
	'ads' => 'domain-registry-whois.l.google.com',
	'adult' => 'whois.afilias-srs.net',
	'ae' => 'whois.aeda.net.ae',
	'aeg' => 'whois.nic.aeg',
	'aero' => 'whois.aero',
	'af' => 'whois.nic.af',
	'afl' => 'whois.nic.afl',
	'ag' => 'whois.nic.ag',
	'agency' => 'whois.donuts.co',
	'ai' => 'whois.ai',
	'aig' => 'whois.nic.aig',
	'airforce' => 'whois.unitedtld.com',
	'airtel' => 'whois.nic.airtel',
	'al' => 'whois.nic.al',
	'allfinanz' => 'whois.ksregistry.net',
	'alsace' => 'whois-alsace.nic.fr',
	'am' => 'whois.amnic.net',
	'amsterdam' => 'whois.nic.amsterdam',
	'an' => '',
	'android' => 'domain-registry-whois.l.google.com',
	'ao' => '',
	'apartments' => 'whois.donuts.co',
	'app' => 'whois.nic.google',
	'aq' => '',
	'aquarelle' => 'whois-aquarelle.nic.fr',
	'ar' => 'whois.nic.ar',
	'archi' => 'whois.ksregistry.net',
	'army' => 'whois.rightside.co',
	'arpa' => 'whois.iana.org',
	'as' => 'whois.nic.as',
	'asia' => 'whois.nic.asia',
	'associates' => 'whois.donuts.co',
	'at' => 'whois.nic.at',
	'attorney' => 'whois.rightside.co',
	'au' => 'whois.audns.net.au',
	'auction' => 'whois.unitedtld.com',
	'audio' => 'whois.uniregistry.net',
	'auto' => 'whois.uniregistry.net',
	'autos' => 'whois.afilias-srs.net',
	'aw' => 'whois.nic.aw',
	'ax' => 'whois.ax',
	'axa' => 'whois.nic.axa',
	'az' => '',
	'azure' => 'whois.nic.azure',
	'ba' => '',
	'band' => 'whois.rightside.co',
	'bank' => 'whois.nic.bank',
	'bar' => 'whois.nic.bar',
	'barcelona' => 'whois.nic.barcelona',
	'barclaycard' => 'whois.nic.barclaycard',
	'barclays' => 'whois.nic.barclays',
	'bargains' => 'whois.donuts.co',
	'bauhaus' => 'whois.nic.bauhaus',
	'bayern' => 'whois-dub.mm-registry.com',
	'bb' => '',
	'bbc' => 'whois.nic.bbc',
	'bbva' => 'whois.nic.bbva',
	'bcn' => 'whois.nic.bcn',
	'bd' => '',
	'be' => 'whois.dns.be',
	'beer' => 'whois-dub.mm-registry.com',
	'bentley' => 'whois.nic.bentley',
	'berlin' => 'whois.nic.berlin',
	'best' => 'whois.nic.best',
	'bet' => 'whois.afilias.net',
	'bf' => '',
	'bg' => 'whois.register.bg',
	'bh' => 'whois.nic.bh',
	'bharti' => 'whois.nic.bharti',
	'bi' => 'whois1.nic.bi',
	'bible' => 'whois.nic.bible',
	'bid' => 'whois.nic.bid',
	'bike' => 'whois.donuts.co',
	'bing' => 'whois.nic.bing',
	'bingo' => 'whois.donuts.co',
	'bio' => 'whois.ksregistry.net',
	'biz' => 'whois.biz',
	'bj' => 'whois.nic.bj',
	'black' => 'whois.afilias.net',
	'blackfriday' => 'whois.uniregistry.net',
	'bloomberg' => 'whois.nic.bloomberg',
	'blue' => 'whois.afilias.net',
	'bm' => '',
	'bmw' => 'whois.ksregistry.net',
	'bn' => 'whois.bnnic.bn',
	'bnl' => 'whois.afilias-srs.net',
	'bnpparibas' => 'whois.afilias-srs.net',
	'bo' => 'whois.nic.bo',
	'boats' => 'whois.afilias-srs.net',
	'bond' => 'whois.nic.bond',
	'boo' => 'domain-registry-whois.l.google.com',
	'boots' => 'whois.nic.boots',
	'boutique' => 'whois.donuts.co',
	'br' => 'whois.registro.br',
	'bradesco' => 'whois-cl01.mm-registry.com',
	'bridgestone' => 'whois.nic.bridgestone',
	'broker' => 'whois.nic.broker',
	'brother' => 'whois.nic.brother',
	'brussels' => 'whois.nic.brussels',
	'bs' => '',
	'bt' => '',
	'budapest' => 'whois-dub.mm-registry.com',
	'build' => 'whois.nic.build',
	'builders' => 'whois.donuts.co',
	'business' => 'whois.donuts.co',
	'buzz' => 'whois.nic.buzz',
	'bv' => '',
	'bw' => 'whois.nic.net.bw',
	'by' => 'whois.cctld.by',
	//'bz' => '',
	'bzh' => 'whois-bzh.nic.fr',
	'ca' => 'whois.cira.ca',
	'cab' => 'whois.donuts.co',
	'cafe' => 'whois.donuts.co',
	'cal' => 'domain-registry-whois.l.google.com',
	'camera' => 'whois.donuts.co',
	'camp' => 'whois.donuts.co',
	'cancerresearch' => 'whois.nic.cancerresearch',
	'canon' => 'whois.nic.canon',
	'capetown' => 'capetown-whois.registry.net.za',
	'capital' => 'whois.donuts.co',
	'caravan' => 'whois.nic.caravan',
	'cards' => 'whois.donuts.co',
	'care' => 'whois.donuts.co',
	'career' => 'whois.nic.career',
	'careers' => 'whois.donuts.co',
	'cars' => 'whois.uniregistry.net',
	'cartier' => 'whois.nic.cartier',
	'casa' => 'whois-dub.mm-registry.com',
	'cash' => 'whois.donuts.co',
	'casino' => 'whois.donuts.co',
	'cat' => 'whois.cat',
	'catering' => 'whois.donuts.co',
	'cba' => 'whois.nic.cba',
	'cbn' => 'whois.nic.cbn',
	'cc' => 'ccwhois.verisign-grs.com',
	'cd' => 'whois.nic.cd',
	'ceb' => 'whois.nic.ceb',
	'center' => 'whois.donuts.co',
	'ceo' => 'whois.nic.ceo',
	'cern' => 'whois.afilias-srs.net',
	'cf' => 'whois.dot.cf',
	'cfa' => 'whois.nic.cfa',
	'cfd' => 'whois.nic.cfd',
	'cg' => '',
	'ch' => 'whois.nic.ch',
	'chanel' => 'whois.nic.chanel',
	'channel' => 'domain-registry-whois.l.google.com',
	'chat' => 'whois.donuts.co',
	'cheap' => 'whois.donuts.co',
	'chloe' => 'whois.nic.chloe',
	'christmas' => 'whois.uniregistry.net',
	'chrome' => 'domain-registry-whois.l.google.com',
	'church' => 'whois.donuts.co',
	'ci' => 'whois.nic.ci',
	'cisco' => 'whois.nic.cisco',
	'citic' => 'whois.nic.citic',
	'city' => 'whois.donuts.co',
	'ck' => 'whois.nic.ck',
	'cl' => 'whois.nic.cl',
	'claims' => 'whois.donuts.co',
	'cleaning' => 'whois.donuts.co',
	'click' => 'whois.uniregistry.net',
	'clinic' => 'whois.donuts.co',
	'clothing' => 'whois.donuts.co',
	'cloud' => 'whois.nic.cloud',
	'club' => 'whois.nic.club',
	'cm' => 'whois.nic.cm',
	'cn' => 'whois.cnnic.cn',
	'co' => 'whois.nic.co',
	'coach' => 'whois.donuts.co',
	'codes' => 'whois.donuts.co',
	'coffee' => 'whois.donuts.co',
	'college' => 'whois.nic.college',
	'cologne' => 'whois-fe1.pdt.cologne.tango.knipp.de',
	//'com' => 'whois.verisign-grs.com',
	'commbank' => 'whois.nic.commbank',
	'community' => 'whois.donuts.co',
	'company' => 'whois.donuts.co',
	'computer' => 'whois.donuts.co',
	'condos' => 'whois.donuts.co',
	'construction' => 'whois.donuts.co',
	'consulting' => 'whois.unitedtld.com',
	'contractors' => 'whois.donuts.co',
	'cooking' => 'whois-dub.mm-registry.com',
	'cool' => 'whois.donuts.co',
	'coop' => 'whois.nic.coop',
	'corsica' => 'whois-corsica.nic.fr',
	'country' => 'whois-dub.mm-registry.com',
	'coupons' => 'whois.donuts.co',
	'courses' => 'whois.aridnrs.net.au',
	'cr' => 'whois.nic.cr',
	'credit' => 'whois.donuts.co',
	'creditcard' => 'whois.donuts.co',
	'cricket' => 'whois.nic.cricket',
	'crown' => 'whois.nic.crown',
	'crs' => 'whois.nic.crs',
	'cruises' => 'whois.donuts.co',
	'cu' => '',
	'cuisinella' => 'whois.nic.cuisinella',
	'cv' => '',
	'cw' => '',
	'cx' => 'whois.nic.cx',
	'cy' => '',
	'cymru' => 'whois.nic.cymru',
	'cyou' => 'whois.afilias-srs.net',
	'cz' => 'whois.nic.cz',
	'dabur' => 'whois.afilias-srs.net',
	'dad' => 'domain-registry-whois.l.google.com',
	'dance' => 'whois.unitedtld.com',
	'date' => 'whois.nic.date',
	'dating' => 'whois.donuts.co',
	'datsun' => 'whois.nic.gmo',
	'day' => 'domain-registry-whois.l.google.com',
	'dclk' => 'domain-registry-whois.l.google.com',
	'de' => 'whois.denic.de',
	'deals' => 'whois.donuts.co',
	'degree' => 'whois.rightside.co',
	'delivery' => 'whois.donuts.co',
	'delta' => 'whois.afilias-srs.net',
	'democrat' => 'whois.unitedtld.com',
	'dental' => 'whois.donuts.co',
	'dentist' => 'whois.rightside.co',
	'desi' => 'whois.ksregistry.net',
	'design' => 'whois.nic.design',
	'dev' => 'domain-registry-whois.l.google.com',
	'diamonds' => 'whois.donuts.co',
	'diet' => 'whois.uniregistry.net',
	'digital' => 'whois.donuts.co',
	'direct' => 'whois.donuts.co',
	'directory' => 'whois.donuts.co',
	'discount' => 'whois.donuts.co',
	'dj' => '',
	'dk' => 'whois.dk-hostmaster.dk',
	'dm' => 'whois.nic.dm',
	'dnp' => 'whois.nic.dnp',
	'do' => 'whois.nic.do',
	'docs' => 'domain-registry-whois.l.google.com',
	'dog' => 'whois.donuts.co',
	'doha' => 'whois.nic.doha',
	'domains' => 'whois.donuts.co',
	'doosan' => 'whois.nic.doosan',
	'download' => 'whois.nic.download',
	'drive' => 'whois.nic.google',
	'durban' => 'durban-whois.registry.net.za',
	'dvag' => 'whois.ksregistry.net',
	'dz' => 'whois.nic.dz',
	'earth' => 'whois.nic.earth',
	'eat' => 'domain-registry-whois.l.google.com',
	'ec' => 'whois.nic.ec',
	'edu' => 'whois.educause.edu',
	'education' => 'whois.donuts.co',
	'ee' => 'whois.tld.ee',
	'eg' => '',
	'email' => 'whois.donuts.co',
	'emerck' => 'whois.afilias-srs.net',
	'energy' => 'whois.donuts.co',
	'engineer' => 'whois.rightside.co',
	'engineering' => 'whois.donuts.co',
	'enterprises' => 'whois.donuts.co',
	'epson' => 'whois.aridnrs.net.au',
	'equipment' => 'whois.donuts.co',
	'er' => '',
	'erni' => 'whois.nic.erni',
	'es' => 'whois.nic.es',
	'esq' => 'domain-registry-whois.l.google.com',
	'estate' => 'whois.donuts.co',
	'et' => '',
	'eu' => 'whois.eu',
	'eurovision' => 'whois.nic.eurovision',
	'eus' => 'whois.eus.coreregistry.net',
	'events' => 'whois.donuts.co',
	'everbank' => 'whois.nic.everbank',
	'exchange' => 'whois.donuts.co',
	'expert' => 'whois.donuts.co',
	'exposed' => 'whois.donuts.co',
	'express' => 'whois.donuts.co',
	'fage' => 'whois.nic.fage',
	'fail' => 'whois.donuts.co',
	'faith' => 'whois.nic.faith',
	'family' => 'whois.rightside.co',
	'fan' => 'whois.nic.fan',
	'fans' => 'whois.nic.fans',
	'farm' => 'whois.donuts.co',
	'fashion' => 'whois-dub.mm-registry.com',
	'feedback' => 'whois.nic.feedback',
	'fi' => 'whois.fi',
	'film' => 'whois.nic.film',
	'finance' => 'whois.donuts.co',
	'financial' => 'whois.donuts.co',
	'firmdale' => 'whois.nic.firmdale',
	'fish' => 'whois.donuts.co',
	'fishing' => 'whois-dub.mm-registry.com',
	'fit' => 'whois-dub.mm-registry.com',
	'fitness' => 'whois.donuts.co',
	'fj' => '',
	'fk' => 'whois.nic.fk',
	'flights' => 'whois.donuts.co',
	'florist' => 'whois.donuts.co',
	'flowers' => 'whois.uniregistry.net',
	'flsmidth' => 'whois.ksregistry.net',
	'fly' => 'domain-registry-whois.l.google.com',
	'fm' => 'whois.nic.fm',
	'fo' => 'whois.nic.fo',
	'foo' => 'domain-registry-whois.l.google.com',
	'football' => 'whois.donuts.co',
	'forex' => 'whois.nic.forex',
	'forsale' => 'whois.unitedtld.com',
	'forum' => 'whois.nic.forum',
	'foundation' => 'whois.donuts.co',
	'fr' => 'whois.nic.fr',
	'frl' => 'whois.nic.frl',
	'frogans' => 'whois-frogans.nic.fr',
	'fund' => 'whois.donuts.co',
	'furniture' => 'whois.donuts.co',
	'futbol' => 'whois.unitedtld.com',
	'fyi' => 'whois.donuts.co',
	'ga' => '',
	'gal' => 'whois.gal.coreregistry.net',
	'gallery' => 'whois.donuts.co',
	'game' => 'whois.uniregistry.net',
	'garden' => 'whois-dub.mm-registry.com',
	'gb' => '',
	'gbiz' => 'domain-registry-whois.l.google.com',
	'gd' => 'whois.nic.gd',
	'gdn' => 'whois.nic.gdn',
	'ge' => '',
	'gent' => 'whois.nic.gent',
	'genting' => 'whois.nic.genting',
	'gf' => 'whois.nic.gf',
	'gg' => 'whois.gg',
	'ggee' => 'whois.nic.ggee',
	'gh' => 'whois.nic.gh',
	'gi' => 'whois2.afilias-grs.net',
	'gift' => 'whois.uniregistry.net',
	'gifts' => 'whois.donuts.co',
	'gives' => 'whois.rightside.co',
	'giving' => 'whois.nic.giving',
	'gl' => 'whois.nic.gl',
	'glass' => 'whois.donuts.co',
	'gle' => 'domain-registry-whois.l.google.com',
	'global' => 'whois.nic.global',
	'globo' => 'whois.gtlds.nic.br',
	'gm' => '',
	'gmail' => 'domain-registry-whois.l.google.com',
	'gmo' => 'whois.nic.gmo',
	'gmx' => 'whois-fe1.gmx.tango.knipp.de',
	'gn' => '',
	'gold' => 'whois.donuts.co',
	'goldpoint' => 'whois.nic.goldpoint',
	'golf' => 'whois.donuts.co',
	'goo' => 'whois.nic.gmo',
	'goog' => 'domain-registry-whois.l.google.com',
	'google' => 'domain-registry-whois.l.google.com',
	'gop' => 'whois-cl01.mm-registry.com',
	'gov' => 'whois.dotgov.gov',
	'gp' => 'whois.nic.gp',
	'gq' => 'whois.dominio.gq',
	'gr' => '',
	'graphics' => 'whois.donuts.co',
	'gratis' => 'whois.donuts.co',
	'green' => 'whois.afilias.net',
	'gripe' => 'whois.donuts.co',
	'group' => 'whois.donuts.co',
	'gs' => 'whois.nic.gs',
	'gt' => '',
	'gu' => '',
	'guge' => 'domain-registry-whois.l.google.com',
	'guide' => 'whois.donuts.co',
	'guitars' => 'whois.uniregistry.net',
	'guru' => 'whois.donuts.co',
	'gw' => '',
	'gy' => 'whois.registry.gy',
	'hamburg' => 'whois.nic.hamburg',
	'hangout' => 'domain-registry-whois.l.google.com',
	'haus' => 'whois.unitedtld.com',
	'healthcare' => 'whois.donuts.co',
	'help' => 'whois.uniregistry.net',
	'here' => 'domain-registry-whois.l.google.com',
	'hermes' => 'whois.afilias-srs.net',
	'hiphop' => 'whois.uniregistry.net',
	'hitachi' => 'whois.nic.gmo',
	'hiv' => 'whois.afilias-srs.net',
	'hk' => 'whois.hkirc.hk',
	'hm' => 'whois.registry.hm',
	'hn' => 'whois.nic.hn',
	'hockey' => 'whois.donuts.co',
	'holdings' => 'whois.donuts.co',
	'holiday' => 'whois.donuts.co',
	'homedepot' => 'whois.afilias-srs.net',
	'homes' => 'whois.afilias-srs.net',
	'honda' => 'whois.nic.honda',
	'horse' => 'whois-dub.mm-registry.com',
	'host' => 'whois.nic.host',
	'hosting' => 'whois.uniregistry.net',
	'hoteles' => 'whois.nic.hoteles',
	'hotmail' => 'whois.nic.hotmail',
	'house' => 'whois.donuts.co',
	'how' => 'domain-registry-whois.l.google.com',
	'hr' => 'whois.dns.hr',
	'hsbc' => 'whois.nic.hsbc',
	'ht' => 'whois.nic.ht',
	'hu' => 'whois.nic.hu',
	'ibm' => 'whois.nic.ibm',
	'icbc' => 'whois.afilias-srs.net',
	'ice' => 'whois.nic.ice',
	'icu' => 'whois.nic.icu',
	'id' => 'whois.pandi.or.id',
	'ie' => 'whois.domainregistry.ie',
	'ifm' => 'whois.nic.ifm',
	'iinet' => 'whois.aridnrs.net.au',
	'il' => 'whois.isoc.org.il',
	'im' => 'whois.nic.im',
	'immo' => 'whois.donuts.co',
	'immobilien' => 'whois.unitedtld.com',
	'in' => 'whois.inregistry.net',
	'industries' => 'whois.donuts.co',
	'infiniti' => 'whois.nic.gmo',
	'info' => 'whois.afilias.net',
	'ing' => 'domain-registry-whois.l.google.com',
	'ink' => 'whois.centralnic.com',
	'institute' => 'whois.donuts.co',
	'insure' => 'whois.donuts.co',
	'int' => 'whois.iana.org',
	'international' => 'whois.donuts.co',
	'investments' => 'whois.donuts.co',
	'io' => 'whois.nic.io',
	'ipiranga' => 'whois.nic.ipiranga',
	'iq' => 'whois.cmc.iq',
	'ir' => 'whois.nic.ir',
	'irish' => 'whois.afilias-srs.net',
	'is' => 'whois.isnic.is',
	'ist' => 'whois.afilias-srs.net',
	'istanbul' => 'whois.afilias-srs.net',
	'it' => 'whois.nic.it',
	'itau' => 'whois.nic.itau',
	'iwc' => 'whois.nic.iwc',
	'java' => 'whois.nic.java',
	'jcb' => 'whois.nic.gmo',
	'je' => 'whois.je',
	'jetzt' => 'whois.nic.jetzt',
	'jewelry' => 'whois.donuts.co',
	'jlc' => 'whois.nic.jlc',
	'jll' => 'whois.afilias-srs.net',
	'jm' => '',
	'jo' => '',
	//'jobs' => 'jobswhois.verisign-grs.com',
	'joburg' => 'joburg-whois.registry.net.za',
	'jp' => 'whois.jprs.jp',
	'jprs' => 'whois.nic.jprs',
	'juegos' => 'whois.uniregistry.net',
	'kaufen' => 'whois.unitedtld.com',
	'kddi' => 'whois.nic.kddi',
	'ke' => 'whois.kenic.or.ke',
	'kg' => 'whois.domain.kg',
	'kh' => '',
	'ki' => 'whois.nic.ki',
	'kim' => 'whois.afilias.net',
	'kitchen' => 'whois.donuts.co',
	'kiwi' => 'whois.nic.kiwi',
	'km' => '',
	'kn' => '',
	'koeln' => 'whois-fe1.pdt.koeln.tango.knipp.de',
	'komatsu' => 'whois.nic.komatsu',
	'kp' => '',
	'kr' => 'whois.kr',
	'krd' => 'whois.aridnrs.net.au',
	'kred' => 'whois.nic.kred',
	'kw' => '',
	'ky' => 'whois.kyregistry.ky',
	'kyoto' => 'whois.nic.kyoto',
	'kz' => 'whois.nic.kz',
	'la' => 'whois.nic.la',
	'lacaixa' => 'whois.nic.lacaixa',
	'lancaster' => 'whois-lancaster.nic.fr',
	'land' => 'whois.donuts.co',
	'lasalle' => 'whois.afilias-srs.net',
	'lat' => 'whois.nic.lat',
	'latrobe' => 'whois.nic.latrobe',
	'law' => 'whois-dub.mm-registry.com',
	'lawyer' => 'whois.rightside.co',
	'lb' => '',
	'lc' => 'whois.nic.lc',
	'lds' => 'whois.afilias-srs.net',
	'lease' => 'whois.donuts.co',
	'leclerc' => 'whois-leclerc.nic.fr',
	'legal' => 'whois.donuts.co',
	'lexus' => 'whois.nic.lexus',
	'lgbt' => 'whois.afilias.net',
	//'li' => 'whois.nic.li',
	'liaison' => 'whois.nic.liaison',
	'lidl' => 'whois.nic.lidl',
	'life' => 'whois.donuts.co',
	'lighting' => 'whois.donuts.co',
	'limited' => 'whois.donuts.co',
	'limo' => 'whois.donuts.co',
	'link' => 'whois.uniregistry.net',
	'live' => 'whois.rightside.co',
	'lixil' => 'whois.nic.lixil',
	'lk' => 'whois.nic.lk',
	'loan' => 'whois.nic.loan',
	'loans' => 'whois.donuts.co',
	'lol' => 'whois.uniregistry.net',
	'london' => 'whois-lon.mm-registry.com',
	'lotte' => 'whois.nic.lotte',
	'lotto' => 'whois.afilias.net',
	'love' => 'whois.centralnic.com',
	'lr' => '',
	'ls' => '',
	'lt' => 'whois.domreg.lt',
	'ltda' => 'whois.afilias-srs.net',
	'lu' => 'whois.dns.lu',
	'lupin' => 'whois.nic.lupin',
	'luxe' => 'whois-dub.mm-registry.com',
	'luxury' => 'whois.nic.luxury',
	'lv' => 'whois.nic.lv',
	'ly' => 'whois.nic.ly',
	'ma' => 'whois.registre.ma',
	'madrid' => 'whois.madrid.rs.corenic.net',
	'maif' => 'whois.nic.maif',
	'maison' => 'whois.donuts.co',
	'man' => 'whois.nic.man',
	'management' => 'whois.donuts.co',
	'mango' => 'whois.mango.coreregistry.net',
	'market' => 'whois.rightside.co',
	'marketing' => 'whois.donuts.co',
	'markets' => 'whois.nic.markets',
	'marriott' => 'whois.afilias-srs.net',
	'mba' => 'whois.donuts.co',
	'mc' => '',
	'md' => 'whois.nic.md',
	'me' => 'whois.nic.me',
	'media' => 'whois.donuts.co',
	'meet' => 'whois.afilias.net',
	'melbourne' => 'whois.aridnrs.net.au',
	'meme' => 'domain-registry-whois.l.google.com',
	'memorial' => 'whois.donuts.co',
	'men' => 'whois.nic.men',
	'menu' => 'whois.nic.menu',
	'mg' => 'whois.nic.mg',
	'mh' => '',
	'miami' => 'whois-dub.mm-registry.com',
	'microsoft' => 'whois.nic.microsoft',
	'mil' => '',
	'mini' => 'whois.ksregistry.net',
	'mk' => 'whois.marnet.mk',
	'ml' => 'whois.dot.ml',
	'mm' => '',
	'mma' => 'whois-mma.nic.fr',
	'mn' => 'whois.nic.mn',
	'mo' => 'whois.monic.mo',
	'mobi' => 'whois.dotmobiregistry.net',
	'moda' => 'whois.unitedtld.com',
	'moe' => 'whois.nic.moe',
	'monash' => 'whois.nic.monash',
	'money' => 'whois.donuts.co',
	'montblanc' => 'whois.nic.montblanc',
	'mormon' => 'whois.afilias-srs.net',
	'mortgage' => 'whois.rightside.co',
	'moscow' => 'whois.nic.moscow',
	'motorcycles' => 'whois.afilias-srs.net',
	'mov' => 'domain-registry-whois.l.google.com',
	'movie' => 'whois.donuts.co',
	'movistar' => 'whois-fe.movistar.tango.knipp.de',
	'mp' => 'whois.nic.mp',
	'mq' => '',
	'mr' => '',
	'ms' => 'whois.nic.ms',
	'mt' => 'whois.nic.mt',
	'mtn' => 'whois.nic.mtn',
	'mtpc' => 'whois.nic.gmo',
	'mu' => 'whois.nic.mu',
	'museum' => 'whois.museum',
	'mv' => '',
	'mw' => '',
	'mx' => 'whois.mx',
	'my' => 'whois.mynic.my',
	'mz' => 'whois.nic.mz',
	'na' => 'whois.na-nic.com.na',
	'nadex' => 'whois.nic.nadex',
	'nagoya' => 'whois.nic.nagoya',
	'name' => 'whois.nic.name',
	'navy' => 'whois.rightside.co',
	'nc' => 'whois.nc',
	'ne' => '',
	'nec' => 'whois.nic.nec',
	//'net' => 'whois.verisign-grs.com',
	'netbank' => 'whois.nic.netbank',
	'network' => 'whois.donuts.co',
	'neustar' => 'whois.nic.neustar',
	'new' => 'domain-registry-whois.l.google.com',
	'news' => 'whois.rightside.co',
	'nexus' => 'domain-registry-whois.l.google.com',
	'nf' => 'whois.nic.nf',
	'ng' => 'whois.nic.net.ng',
	'ngo' => 'whois.publicinterestregistry.net',
	'nhk' => 'whois.nic.nhk',
	'ni' => '',
	'nico' => 'whois.nic.nico',
	'ninja' => 'whois.unitedtld.com',
	'nissan' => 'whois.nic.gmo',
	'nl' => 'whois.domain-registry.nl',
	'no' => 'whois.norid.no',
	'nokia' => 'whois.afilias-srs.net',
	'np' => '',
	'nr' => '',
	'nra' => 'whois.afilias-srs.net',
	'nrw' => 'whois.nic.nrw',
	'ntt' => 'whois.nic.ntt',
	'nu' => 'whois.iis.nu',
	'nyc' => 'whois.nic.nyc',
	'nz' => 'whois.srs.net.nz',
	'office' => 'whois.nic.office',
	'okinawa' => 'whois.nic.okinawa',
	'om' => 'whois.registry.om',
	'omega' => 'whois.nic.omega',
	'one' => 'whois.nic.one',
	'ong' => 'whois.publicinterestregistry.net',
	'onl' => 'whois.afilias-srs.net',
	'online' => 'whois.centralnic.com',
	'ooo' => 'whois.nic.ooo',
	'oracle' => 'whois.nic.oracle',
	'orange' => 'whois.nic.orange',
	'org' => 'whois.pir.org',
	'organic' => 'whois.afilias.net',
	'osaka' => 'whois.nic.osaka',
	'otsuka' => 'whois.nic.otsuka',
	'ovh' => 'whois-ovh.nic.fr',
	'pa' => '',
	'page' => 'domain-registry-whois.l.google.com',
	'panerai' => 'whois.nic.panerai',
	'paris' => 'whois-paris.nic.fr',
	'partners' => 'whois.donuts.co',
	'parts' => 'whois.donuts.co',
	'party' => 'whois.nic.party',
	'pe' => 'kero.yachay.pe',
	'pet' => 'whois.afilias.net',
	'pf' => 'whois.registry.pf',
	'pg' => '',
	'ph' => 'whois.nic.ph',
	'pharmacy' => 'whois.nic.pharmacy',
	'philips' => 'whois.nic.philips',
	'photo' => 'whois.uniregistry.net',
	'photography' => 'whois.donuts.co',
	'photos' => 'whois.donuts.co',
	'physio' => 'whois.nic.physio',
	'piaget' => 'whois.nic.piaget',
	'pics' => 'whois.uniregistry.net',
	'pictet' => 'whois.nic.pictet',
	'pictures' => 'whois.donuts.co',
	'pink' => 'whois.afilias.net',
	'pizza' => 'whois.donuts.co',
	'pk' => '',
	'pl' => 'whois.dns.pl',
	'place' => 'whois.donuts.co',
	'play' => 'whois.nic.google',
	'plumbing' => 'whois.donuts.co',
	'plus' => 'whois.donuts.co',
	'pm' => 'whois.nic.pm',
	'pn' => '',
	'pohl' => 'whois.ksregistry.net',
	'poker' => 'whois.afilias.net',
	'porn' => 'whois.afilias-srs.net',
	'post' => 'whois.dotpostregistry.net',
	'pr' => 'whois.nic.pr',
	'praxi' => 'whois.nic.praxi',
	'press' => 'whois.nic.press',
	'pro' => 'whois.dotproregistry.net',
	'prod' => 'domain-registry-whois.l.google.com',
	'productions' => 'whois.donuts.co',
	'prof' => 'domain-registry-whois.l.google.com',
	'properties' => 'whois.donuts.co',
	'property' => 'whois.uniregistry.net',
	'ps' => 'whois.nic.ps',
	'pt' => 'whois.dns.pt',
	'pub' => 'whois.unitedtld.com',
	'pw' => 'whois.nic.pw',
	'py' => '',
	'qa' => 'whois.registry.qa',
	'qpon' => 'whois.nic.qpon',
	'quebec' => 'whois.nic.quebec',
	'racing' => 'whois.nic.racing',
	're' => 'whois.nic.re',
	'realtor' => 'whois.nic.realtor',
	'realty' => 'whois.nic.realty',
	'recipes' => 'whois.donuts.co',
	'red' => 'whois.afilias.net',
	'redstone' => 'whois.afilias-srs.net',
	'rehab' => 'whois.rightside.co',
	'reise' => 'whois.nic.reise',
	'reisen' => 'whois.donuts.co',
	'reit' => 'whois.nic.reit',
	'ren' => 'whois.nic.ren',
	'rent' => 'whois.nic.rent',
	'rentals' => 'whois.donuts.co',
	'repair' => 'whois.donuts.co',
	'report' => 'whois.donuts.co',
	'republican' => 'whois.rightside.co',
	'rest' => 'whois.nic.rest',
	'restaurant' => 'whois.donuts.co',
	'review' => 'whois.nic.review',
	'reviews' => 'whois.unitedtld.com',
	'rich' => 'whois.afilias-srs.net',
	'ricoh' => 'whois.nic.ricoh',
	'rio' => 'whois.gtlds.nic.br',
	'rip' => 'whois.rightside.co',
	'ro' => 'whois.rotld.ro',
	'rocks' => 'whois.unitedtld.com',
	'rodeo' => 'whois-dub.mm-registry.com',
	'rs' => 'whois.rnids.rs',
	'rsvp' => 'domain-registry-whois.l.google.com',
	'ru' => 'whois.tcinet.ru',
	'ruhr' => 'whois.nic.ruhr',
	'run' => 'whois.donuts.co',
	'rw' => '',
	'ryukyu' => 'whois.nic.ryukyu',
	'sa' => 'whois.nic.net.sa',
	'saarland' => 'whois.ksregistry.net',
	'sakura' => 'whois.nic.sakura',
	'sale' => 'whois.rightside.co',
	'samsung' => 'whois.nic.samsung',
	'sandvik' => 'whois.nic.sandvik',
	'sandvikcoromant' => 'whois.nic.sandvikcoromant',
	'sanofi' => 'whois.nic.sanofi',
	'sap' => 'whois.nic.sap',
	'sarl' => 'whois.donuts.co',
	'saxo' => 'whois.aridnrs.net.au',
	'sb' => 'whois.nic.net.sb',
	'sc' => 'whois2.afilias-grs.net',
	'sca' => 'whois.nic.sca',
	'scb' => 'whois.nic.scb',
	'schmidt' => 'whois.nic.schmidt',
	'scholarships' => 'whois.afilias-srs.net',
	'school' => 'whois.donuts.co',
	'schule' => 'whois.donuts.co',
	'schwarz' => 'whois.nic.schwarz',
	'science' => 'whois.nic.science',
	'scor' => 'whois.nic.scor',
	'scot' => 'whois.scot.coreregistry.net',
	'sd' => '',
	'se' => 'whois.iis.se',
	'seat' => 'whois.nic.seat',
	'seek' => 'whois.nic.seek',
	'sener' => 'whois.nic.sener',
	'services' => 'whois.donuts.co',
	'sew' => 'whois.afilias-srs.net',
	'sex' => 'whois.afilias-srs.net',
	'sexy' => 'whois.uniregistry.net',
	'sg' => 'whois.sgnic.sg',
	'sh' => 'whois.nic.sh',
	'shiksha' => 'whois.afilias.net',
	'shoes' => 'whois.donuts.co',
	'show' => 'whois.donuts.co',
	'shriram' => 'whois.afilias-srs.net',
	'si' => 'whois.register.si',
	'singles' => 'whois.donuts.co',
	'site' => 'whois.centralnic.com',
	'sj' => '',
	'sk' => 'whois.sk-nic.sk',
	'ski' => 'whois.ksregistry.net',
	'sky' => 'whois.nic.sky',
	'skype' => 'whois.nic.skype',
	'sl' => 'whois.nic.sl',
	'sm' => 'whois.nic.sm',
	'sn' => 'whois.nic.sn',
	'sncf' => 'whois-sncf.nic.fr',
	'so' => 'whois.nic.so',
	'soccer' => 'whois.donuts.co',
	'social' => 'whois.unitedtld.com',
	'software' => 'whois.rightside.co',
	'sohu' => 'whois.nic.sohu',
	'solar' => 'whois.donuts.co',
	'solutions' => 'whois.donuts.co',
	'sony' => 'whois.nic.sony',
	'soy' => 'domain-registry-whois.l.google.com',
	'space' => 'whois.nic.space',
	'spiegel' => 'whois.ksregistry.net',
	'spreadbetting' => 'whois.nic.spreadbetting',
	'sr' => '',
	'srl' => 'whois.afilias-srs.net',
	'st' => 'whois.nic.st',
	'starhub' => 'whois.nic.starhub',
	'statoil' => 'whois.nic.statoil',
	'studio' => 'whois.rightside.co',
	'study' => 'whois.nic.study',
	'style' => 'whois.donuts.co',
	'su' => 'whois.tcinet.ru',
	'sucks' => 'whois.nic.sucks',
	'supplies' => 'whois.donuts.co',
	'supply' => 'whois.donuts.co',
	'support' => 'whois.donuts.co',
	'surf' => 'whois-dub.mm-registry.com',
	'surgery' => 'whois.donuts.co',
	'suzuki' => 'whois.nic.suzuki',
	'sv' => '',
	'swatch' => 'whois.nic.swatch',
	'swiss' => 'whois.nic.swiss',
	'sx' => 'whois.sx',
	'sy' => 'whois.tld.sy',
	'sydney' => 'whois.nic.sydney',
	'systems' => 'whois.donuts.co',
	'sz' => '',
	'taipei' => 'whois.nic.taipei',
	'tatamotors' => 'whois.nic.tatamotors',
	'tatar' => 'whois.nic.tatar',
	'tattoo' => 'whois.uniregistry.net',
	'tax' => 'whois.donuts.co',
	'taxi' => 'whois.donuts.co',
	'tc' => 'whois.nic.tc',
	'td' => '',
	'team' => 'whois.donuts.co',
	'tech' => 'whois.nic.tech',
	'technology' => 'whois.donuts.co',
	'tel' => 'whois.nic.tel',
	'telefonica' => 'whois-fe.telefonica.tango.knipp.de',
	'temasek' => 'whois.afilias-srs.net',
	'tennis' => 'whois.donuts.co',
	'tf' => 'whois.nic.tf',
	'tg' => 'whois.nic.tg',
	'th' => 'whois.thnic.co.th',
	'thd' => 'whois.afilias-srs.net',
	'theater' => 'whois.donuts.co',
	'tickets' => 'whois.nic.tickets',
	'tienda' => 'whois.donuts.co',
	'tips' => 'whois.donuts.co',
	'tires' => 'whois.donuts.co',
	'tirol' => 'whois.nic.tirol',
	'tj' => '',
	'tk' => 'whois.dot.tk',
	'tl' => 'whois.nic.tl',
	'tm' => 'whois.nic.tm',
	'tn' => 'whois.ati.tn',
	'to' => 'whois.tonic.to',
	'today' => 'whois.donuts.co',
	'tokyo' => 'whois.nic.tokyo',
	'tools' => 'whois.donuts.co',
	'top' => 'whois.nic.top',
	'toray' => 'whois.nic.toray',
	'toshiba' => 'whois.nic.toshiba',
	'tours' => 'whois.donuts.co',
	'town' => 'whois.donuts.co',
	'toyota' => 'whois.nic.toyota',
	'toys' => 'whois.donuts.co',
	'tp' => '',
	'tr' => 'whois.nic.tr',
	'trade' => 'whois.nic.trade',
	'trading' => 'whois.nic.trading',
	'training' => 'whois.donuts.co',
	'travel' => 'whois.nic.travel',
	'trust' => 'whois.nic.trust',
	'tt' => '',
	'tui' => 'whois.ksregistry.net',
	//'tv' => 'tvwhois.verisign-grs.com',
	'tw' => 'whois.twnic.net.tw',
	'tz' => 'whois.tznic.or.tz',
	'ua' => 'whois.ua',
	'ubs' => 'whois.nic.ubs',
	'ug' => 'whois.co.ug',
	'uk' => 'whois.nic.uk',
	'university' => 'whois.donuts.co',
	'uno' => 'whois.nic.uno',
	'uol' => 'whois.gtlds.nic.br',
	'us' => 'whois.nic.us',
	'uy' => 'whois.nic.org.uy',
	'uz' => 'whois.cctld.uz',
	'va' => '',
	'vacations' => 'whois.donuts.co',
	'vc' => 'whois2.afilias-grs.net',
	've' => 'whois.nic.ve',
	'vegas' => 'whois.afilias-srs.net',
	'ventures' => 'whois.donuts.co',
	'versicherung' => 'whois.nic.versicherung',
	'vet' => 'whois.rightside.co',
	'vg' => 'whois.nic.vg',
	'vi' => 'whois.nic.vi',
	'viajes' => 'whois.donuts.co',
	'video' => 'whois.rightside.co',
	'villas' => 'whois.donuts.co',
	'vin' => 'whois.donuts.co',
	'vision' => 'whois.donuts.co',
	'vista' => 'whois.nic.vista',
	'vistaprint' => 'whois.nic.vistaprint',
	'vlaanderen' => 'whois.nic.vlaanderen',
	'vn' => 'whois.nic.vn',
	'vodka' => 'whois-dub.mm-registry.com',
	'vote' => 'whois.afilias.net',
	'voting' => 'whois.voting.tld-box.at',
	'voto' => 'whois.afilias.net',
	'voyage' => 'whois.donuts.co',
	'vu' => 'vunic.vu',
	'wales' => 'whois.nic.wales',
	'walter' => 'whois.nic.walter',
	'wang' => 'whois.gtld.knet.cn',
	'watch' => 'whois.donuts.co',
	'webcam' => 'whois.nic.webcam',
	'website' => 'whois.nic.website',
	'wed' => 'whois.nic.wed',
	'wedding' => 'whois-dub.mm-registry.com',
	'weir' => 'whois.nic.weir',
	'wf' => 'whois.nic.wf',
	'whoswho' => 'whois.nic.whoswho',
	'wien' => 'whois.nic.wien',
	'wiki' => 'whois.nic.wiki',
	'williamhill' => 'whois.nic.williamhill',
	'win' => 'whois.nic.win',
	'windows' => 'whois.nic.windows',
	'wine' => 'whois.donuts.co',
	'wme' => 'whois.nic.wme',
	'work' => 'whois-dub.mm-registry.com',
	'works' => 'whois.donuts.co',
	'world' => 'whois.donuts.co',
	'ws' => 'whois.website.ws',
	'wtc' => 'whois.nic.wtc',
	'wtf' => 'whois.donuts.co',
	'xbox' => 'whois.nic.xbox',
	'xerox' => 'whois.nic.xerox',
	'xin' => 'whois.afilias-srs.net',
	'xperia' => 'whois.nic.xperia',
	'xxx' => 'whois.nic.xxx',
	'xyz' => 'whois.nic.xyz',
	'yachts' => 'whois.afilias-srs.net',
	'yandex' => 'whois.nic.yandex',
	'ye' => '',
	'yodobashi' => 'whois.nic.gmo',
	'yoga' => 'whois-dub.mm-registry.com',
	'yokohama' => 'whois.nic.yokohama',
	'youtube' => 'domain-registry-whois.l.google.com',
	'yt' => 'whois.nic.yt',
	'za' => '',
	'zip' => 'domain-registry-whois.l.google.com',
	'zm' => 'whois.nic.zm',
	'zone' => 'whois.donuts.co',
	'zuerich' => 'whois.ksregistry.net',
	'zw' => '',

    // Second level
    'net.au'                 => 'whois.aunic.net',
    'ae.com'                 => 'whois.centralnic.net',
    'br.com'                 => 'whois.centralnic.net',
    'cn.com'                 => 'whois.centralnic.net',
    'de.com'                 => 'whois.centralnic.net',
    'eu.com'                 => 'whois.centralnic.net',
    'gb.com'                 => 'whois.centralnic.net',
    'hu.com'                 => 'whois.centralnic.net',
    'jpn.com'                => 'whois.centralnic.net',
    'kr.com'                 => 'whois.centralnic.net',
    'no.com'                 => 'whois.centralnic.net',
    'qc.com'                 => 'whois.centralnic.net',
    'ru.com'                 => 'whois.centralnic.net',
    'sa.com'                 => 'whois.centralnic.net',
    'se.com'                 => 'whois.centralnic.net',
    'uk.com'                 => 'whois.centralnic.net',
    'us.com'                 => 'whois.centralnic.net',
    'uy.com'                 => 'whois.centralnic.net',
    'za.com'                 => 'whois.centralnic.net',
    'com.my'                 => 'whois.mynic.net.my',
    'gb.net'                 => 'whois.centralnic.net',
    'se.net'                 => 'whois.centralnic.net',
    'uk.net'                 => 'whois.centralnic.net',
    'za.net'                 => 'http://www.za.net/cgi-bin/whois.cgi?domain={domain}.za.net',
    'za.org'                 => 'http://www.za.net/cgi-bin/whois.cgi?domain={domain}.za.org',
    'com.ru'                 => 'whois.nic.ru',
    'msk.ru'                 => 'whois.nic.ru',
    'net.ru'                 => 'whois.nic.ru',
    'org.ru'                 => 'whois.nic.ru',
    'pp.ru'                  => 'whois.nic.ru',
    'sochi.su'               => 'whois.nic.ru',
    'co.za'                  => 'http://co.za/cgi-bin/whois.sh?Domain={domain}.co.za',
    'org.za'                 => 'http://www.org.za/cgi-bin/rwhois?domain={domain}.org.za&format=full',

    // National tlds
    'xn--3bst00m'            => 'whois.gtld.knet.cn',
    'xn--3ds443g'            => 'whois.afilias-srs.net',
    'xn--3e0b707e'           => 'whois.kr',
    'xn--4gbrim'             => 'whois.afilias-srs.net',
    'xn--55qw42g'            => 'whois.conac.cn',
    'xn--55qx5d'             => 'whois.ngtld.cn',
    'xn--6frz82g'            => 'whois.afilias.net',
    'xn--6qq986b3xl'         => 'whois.gtld.knet.cn',
    'xn--80adxhks'           => 'whois.nic.xn--80adxhks',
    'xn--80ao21a'            => 'whois.nic.kz',
    'xn--80asehdb'           => 'whois.online.rs.corenic.net',
    'xn--80aswg'             => 'whois.site.rs.corenic.net',
    'xn--c1avg'              => 'whois.publicinterestregistry.net',
    'xn--cg4bki'             => 'whois.kr',
    'xn--clchc0ea0b2g2a9gcd' => 'whois.sgnic.sg',
    'xn--czru2d'             => 'whois.gtld.knet.cn',
    'xn--d1acj3b'            => 'whois.nic.xn--d1acj3b',
    'xn--fiq228c5hs'         => 'whois.afilias-srs.net',
    'xn--fiq64b'             => 'whois.gtld.knet.cn',
    'xn--fiqs8s'             => 'cwhois.cnnic.cn',
    'xn--fiqz9s'             => 'cwhois.cnnic.cn',
    'xn--i1b6b1a6a2e'        => 'whois.publicinterestregistry.net',
    'xn--io0a7i'             => 'whois.ngtld.cn',
    'xn--j1amh'              => 'whois.dotukr.com',
    'xn--j6w193g'            => 'whois.hkirc.hk',
    'xn--kprw13d'            => 'whois.twnic.net.tw',
    'xn--kpry57d'            => 'whois.twnic.net.tw',
    'xn--lgbbat1ad8j'        => 'whois.nic.dz',
    'xn--mgb9awbf'           => 'whois.registry.om',
    'xn--mgba3a4f16a'        => 'whois.nic.ir',
    'xn--mgbaam7a8h'         => 'whois.aeda.net.ae',
    'xn--mgbab2bd'           => 'whois.bazaar.coreregistry.net',
    'xn--mgberp4a5d4ar'      => 'whois.nic.net.sa',
    'xn--mgbx4cd0ab'         => 'whois.mynic.my',
    'xn--ngbc5azd'           => 'whois.nic.xn--ngbc5azd',
    'xn--nqv7f'              => 'whois.publicinterestregistry.net',
    'xn--nqv7fs00ema'        => 'whois.publicinterestregistry.net',
    'xn--o3cw4h'             => 'whois.thnic.co.th',
    'xn--ogbpf8fl'           => 'whois.tld.sy',
    'xn--p1ai'               => 'whois.tcinet.ru',
    'xn--q9jyb4c'            => 'domain-registry-whois.l.google.com',
    'xn--rhqv96g'            => 'whois.nic.xn--rhqv96g',
    'xn--unup4y'             => 'whois.donuts.co',
    'xn--wgbl6a'             => 'whois.registry.qa',
    'xn--yfro4i67o'          => 'whois.sgnic.sg',
    'xn--ygbi2ammx'          => 'whois.pnina.ps',
    'xn--zfr164b'            => 'whois.conac.cn',
),

/* handled gTLD whois servers */

'WHOIS_GTLD_HANDLER' => array(
    'whois.bulkregister.com' => 'enom',
    'whois.dotregistrar.com' => 'dotster',
    'whois.namesdirect.com'  => 'dotster',
    'whois.psi-usa.info'     => 'psiusa',
    'whois.www.tv'           => 'tvcorp',
    'whois.tucows.com'       => 'opensrs',
    'whois.35.com'           => 'onlinenic',
    'whois.nominalia.com'    => 'genericb',
    'whois.encirca.com'      => 'genericb',
    'whois.corenic.net'      => 'genericb'
),
);
