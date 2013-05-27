<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Sunucu yapılandırmasını silme başarısız oldu",
"The configuration is valid and the connection could be established!" => "Yapılandırma geçerli ve bağlantı kuruldu!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Yapılandırma geçerli fakat bağlanma(bind) başarısız. Lütfen Sunucu ayarları ve kimlik bilgilerini kontrol ediniz.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Yapılandırma geçersiz. Daha fazla detay için lütfen ownCloud günlüklerine bakınız.",
"Deletion failed" => "Silme başarısız oldu",
"Take over settings from recent server configuration?" => "Ayarları son sunucu yapılandırmalarından devral?",
"Keep settings?" => "Ayarlar kalsın mı?",
"Cannot add server configuration" => "Sunucu yapılandırması eklenemedi",
"Error" => "Hata",
"Connection test succeeded" => "Bağlantı testi başarılı oldu",
"Connection test failed" => "Bağlantı testi başarısız oldu",
"Do you really want to delete the current Server Configuration?" => "Şu anki sunucu yapılandırmasını silmek istediğinizden emin misiniz?",
"Confirm Deletion" => "Silmeyi onayla",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Uyari </b> Apps kullanici_Idap ve user_webdavauth uyunmayan. Bu belki sik degil. Lutfen sistem yonetici sormak on aktif yapmaya. ",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Ihbar <b> Modulu PHP LDAP yuklemdi degil, backend calismacak. Lutfen sistem yonetici sormak  yuklemek icin.",
"Server configuration" => "Sunucu uyunlama ",
"Add Server Configuration" => "Sunucu Uyunlama birlemek ",
"Host" => "Sunucu",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Protokol atlamak edesin, sadece SSL istiyorsaniz. O zaman, idapsile baslamak. ",
"Base DN" => "Ana DN",
"One Base DN per line" => "Bir Tabani DN herbir dizi. ",
"You can specify Base DN for users and groups in the Advanced tab" => "Base DN kullanicileri  ve kaynaklari icin tablosu Advanced tayin etmek ederiz. ",
"User DN" => "Kullanıcı DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN musterinin, kimle baglamaya yapacagiz,meselâ uid=agent.dc mesela, dc=com Gecinme adisiz ici, DN  ve Parola bos birakmak. ",
"Password" => "Parola",
"For anonymous access, leave DN and Password empty." => "Anonim erişim için DN ve Parola alanlarını boş bırakın.",
"User Login Filter" => "Kullanıcı Oturum Filtresi",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Filter uyunlamak icin tayin ediyor, ne zaman girişmek isteminiz. % % uid adi kullanici girismeye karsi koymacak. ",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "%%uid yer tutucusunu kullanın, örneğin \"uid=%%uid\"",
"User List Filter" => "Kullanıcı Liste Filtresi",
"Defines the filter to apply, when retrieving users." => "Filter uyunmak icin tayin ediyor, ne zaman adi  kullanici geri aliyor. ",
"without any placeholder, e.g. \"objectClass=person\"." => "bir yer tutucusu olmadan, örneğin \"objectClass=person\"",
"Group Filter" => "Grup Süzgeci",
"Defines the filter to apply, when retrieving groups." => "Filter uyunmak icin tayin ediyor, ne zaman grubalari tekrar aliyor. ",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "siz bir yer tutucu, mes. 'objectClass=posixGroup ('posixGrubu''. ",
"Connection Settings" => "Bağlantı ayarları",
"When unchecked, this configuration will be skipped." => "Ne zaman iptal, bu uynnlama isletici ",
"Port" => "Port",
"Backup (Replica) Host" => "Sigorta Kopya Cephe ",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Bir kopya cevre vermek, kopya sunucu onemli olmali. ",
"Backup (Replica) Port" => "Kopya Port ",
"Disable Main Server" => "Ana sunucuyu devredışı birak",
"When switched on, ownCloud will only connect to the replica server." => "Ne zaman acik, ownCloud sadece sunuce replikayin baglamis.",
"Use TLS" => "TLS kullan",
"Do not use it additionally for LDAPS connections, it will fail." => "Bu LDAPS baglama icin kullamaminiz, basamacak. ",
"Case insensitve LDAP server (Windows)" => "Dusme sunucu LDAP zor degil. (Windows)",
"Turn off SSL certificate validation." => "SSL sertifika doğrulamasını kapat.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Bagladiginda, bunla secene sadece calisiyor, sunucu LDAP SSL sunucun ithal etemek, dneyme sizine sunucu ownClouden. ",
"Not recommended, use for testing only." => "Önerilmez, sadece test için kullanın.",
"Cache Time-To-Live" => "Cache Time-To-Live ",
"in seconds. A change empties the cache." => "saniye cinsinden. Bir değişiklik önbelleği temizleyecektir.",
"Directory Settings" => "Parametrar Listesin Adresinin ",
"User Display Name Field" => "Ekran Adi Kullanici, (Alan Adi Kullanici Ekrane)",
"The LDAP attribute to use to generate the user`s ownCloud name." => "LDAP kategori kullanmaya adi ownCloud kullanicin uremek icin. ",
"Base User Tree" => "Temel Kullanıcı Ağacı",
"One User Base DN per line" => "Bir Temel Kullanici DN her dizgi ",
"User Search Attributes" => "Kategorii Arama Kullanici ",
"Group Display Name Field" => "Grub Ekrane Alani Adi",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "LDAP kullamayin grub adi ownCloud uremek icin. ",
"Base Group Tree" => "Temel Grup Ağacı",
"One Group Base DN per line" => "Bir Grubu Tabani DN her dizgi. ",
"Group Search Attributes" => "Kategorii Arama Grubu",
"Group-Member association" => "Grup-Üye işbirliği",
"in bytes" => "byte cinsinden",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Kullanıcı adı bölümünü boş bırakın (varsayılan). ",
"Help" => "Yardım"
);
