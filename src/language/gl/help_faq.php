<?php
/** 
*
* help_faq [Galician]
*
* @package language
* @version $Id: help_faq.php 9623 2009-06-18 18:12:28Z nickvergessen $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
	array(
		0 => '--',
		1 => 'Cuestións de rexistro e inicio de sesión'
	),
	array(
		0 => 'Por que non podo iniciar unha sesión?',
		1 => 'Hai varias razóns polo que isto pode ocorrer. En primeiro lugar, asegúrate de que o teu nome de usuario e contrasinal son correctos. Se o son, contacta co xestor do taboleiro para estar certo de que no se che prohibiu o acceso. Tamén podería ser que o xestor do sitio web teña cometido un erro de configuración, que precisará solucionar.'
	),
	array(
		0 => 'Por que me teño que rexistrar para todo',
		1 => 'Non estás obrigado a facelo, a decisión tómana os administradores e moderadores. Porén, estar rexistrado dache moitas vantaxes que como usuario convidado non terías, como ter o teu gráfico personalizado (avatar), mensaxes privadas, enviar correos-e aos outros usuarios, subscrición a grupos de usuarios, etc. Só che levará uns segundos, é moi recomendábel.'
	),
	array(
		0 => 'Por que a miña sesión de usuario expira automaticamente?',
		1 => 'Se non activas a opción <em>Iniciar sesión automáticamente</em> cando inicias a mesma o foro manterá a túa sesión por un tempo predeterminado. Isto prevén que a túa conta poda ser usada por alguén máis. Para permanecer coa sesión activa, marca a opción ao entrar. NON é recomendábel se accedes ao foro desde un ordenador compartido, é dicir, dun café-internet, biblioteca, sala da universidade, etc. Se non che aparece esta caixa de opción, significa que o administrador desactivou tal posibilidade.'
	),
	array(
		0 => 'Como evito que apareza o meu nome de usuario nas listas de usuarios conectados?',
		1 => 'No teu Panel de Control de Usuario, embaixo de “Preferencias do taboleiro”, atoparás a opción <em>Ocultar o teu estado en liña</em>. Activa esta opción con <samp>Si</samp> e só aparecerás para os administradores, moderadores e ti mesmo. Contarás coma un usuario oculto.'
	),
	array(
		0 => 'Perdín o meu contrasinal!',
		1 => 'Acouga! Aínda que o teu contrasinal non pode ser recuperado podes reinicialo dun xeito doado. Para facelo diríxete á páxina de rexistro e preme en <em>Esquecín o meu contrasinal</em>. Segue as instrucións e poderas volver iniciar unha sesión en moi pouco tempo.'
	),
	array(
		0 => 'Rexistreime pero non podo entrar!',
		1 => 'Primeiro verifica os teus datos de usuario e contrasinal. Se todo é correcto hai dúas posibeis razóns: se o Sistema de Protección Infantil (COPPA) está activado e cando te rexistraches especificaches ser menor de 13 anos, entón terás que seguir as instruccións que se che deron. Algúns foros requerirán que todos os novos rexistros sexan activados, ben por tí mesmo ou polo administrador antes de que poidas iniciar a sesión; esta información amósase durante o proceso de rexistro. Se recibiches un correo-e segue as instruccións que se che indiquen. Se non recibiches correo-e ningún entón pode que o enderezo que suministraches sexa incorrecto ou a mensaxe fose rexeitada por algun filtro anti-spam. Se estás certo que o enderezo de correo-e que deches é válido tenta conectar co administrador do foro.'
	),
	array(
		0 => 'Hai un tempo rexistreime, pero agora non podo entrar!',
		1 => 'Tenta localizar o correo-e que che enviaron no teu primeiro rexistro, comproba o teu nome de usuario e contrasinal e téntao de novo. Pode ser que algún administrador desactivase ou eliminase a túa conta por algún motivo. Do mesmo xeito, moitos foros eliminan periódicamente aqueles usuarios que non publicaron mensaxes nun prazo longo de tempo co fin de reducir o tamaño do banco de datos. Se foi o caso, tenta rexistrarte de novo e participa máis activamente nas discusións.'
	),
	array(
		0 => 'Que é o COPPA?',
		1 => 'O COPPA, ou o protocolo Child Online Privacy and Protection (Privacidade e Protección de Rapaces en liña) do 1998, é unha lei dos Estados Unidos que require que, os sitios web que potencialmente poidan recoller información de menores de 13 anos, deban dispoñer de consentimento por escrito dos pais ou calquera outro método de recoñecemento por parte do titor legal, permitindo esa recollida de información persoalmente identificable dun menor de 13 anos. Se non estás certo da aplicación de isto na túa persoa no momento de tentar rexistrarte ou da aplicación ao sitio web no que tentas facelo, contacta con algún asesor legal para obter asistencia. Ten en conta que o phpBB Group non pode proporcionar esa asistencia legal nin é un punto de contacto para asuntos legais, agás dos que se bosquexan máis abaixo.',
	),
	array(
		0 => 'Por que non me podo rexistrar?',
		1 => 'Pode ser que o xestor do sitio web prohibise o acceso do teu enderezo IP ou non permita o nome de usuario que estás tentando rexistrar. Tamén podería ser que o xestor do web teña desactivada a posibilidade de rexistro para evitar que se axunten novos visitantes. Contacta con algún administrador do taboleiro para obter axuda.',
	),
	array(
		0 => 'Que fai a opción “Eliminar todas as cookies do taboleiro”?',
		1 => '“Eliminar todas as cookies do taboleiro” elimina as cookies creadas polo phpBB que te manteñen identificado e conectado no taboleiro. Tamén proporciona funcións como control de lecturas, se é que foron activadas polo xestor dos foros. Se estás a ter problemas de inicio ou remate de sesións, ás veces eliminar as cookies do taboleiro pode axudar.',
	),
	array(
		0 => '--',
		1 => 'Preferencias de usuario e configuracións'
	),
	array(
		0 => 'Como podo mudar a miña configuración?',
		1 => 'Se es un usuario rexistrado, toda a túa configuración esta gardada no banco de datos do taboleiro. Para modificala, Vai ao teu Panel de Control de Usuario; normalmente atoparás unha ligazón directa na parte superior das páxinas dos foros. Este sistema permitirache mudar todas as túas opcións e preferencias.'
	),
	array(
		0 => 'A hora nos foros non é correcta!',
		1 => 'É posíbel que esteas vendo as horas correspondentes a outra zona horaria distinta da túa. Neste caso, vai ao teu Panel de Control de Usuario e muda a túa zona horaria de acordo á túa localización, p.e. Londres, Paris, Nova Iorque, Sidnei, Mondoñedo, etc. Ten en conta que o troco de zona horaria, como moitas outras cousas, só pode ser levado a cabo por usuarios rexistrados. Por eso, se non te rexistraches aínda, xa é hora de facelo, dispensando o xogo de palabras.'
	),
	array(
		0 => 'Cambiei a zona horaria pero a hora segue a ser incorrecta!',
		1 => 'Se estás certo de que seleccionaches correctamente a zona horaria e o horario de verán no seu caso, e a hora segue a aparecer de xeito incorrecto, logo é que a hora do reloxo do teu servidor está equivocada. Notifícallo aos administradores do mesmo para que poidan corrixilo.'
	),
	array(
		0 => 'O meu idioma non está na lista!',
		1 => 'O máis habitual é que o administrador non instalara o paquete da túa lingua para o foro ou que ninguén creara unha tradución para a mesma. Proba a pedirlle ó administradoor dos foros se pode instalar o paquete de lingua que precisas ou, se non existe, síntete ceibe de facer unha tradución. Podes atopar máis información na web do phpBB Group (preme na ligazón que se atopa ao remate das páxinas).'
	),
	array(
		0 => 'Como podo amosar unha imaxe debaixo do meu nome de usuario?',
		1 => 'Hai dous tipos de imaxes que poden aparecer embaixo dun nome de usuario cando se están a ver mensaxes. Dependendo do estilo que se utilice, a primeira pode ser unha imaxe asociada co teu rango, xeralmente en forma de estrelas, bloques ou puntos, indicando a cantidade de mensaxes que publicaches ou o teu estatus no taboleiro. A segunda, normalmente unha imaxe meirande, coñécese por avatar e adoita ser única ou persoal para cada usuario. A dispoñibilidade do uso de avatares decídea o administrador do foro así como a forma na que se poden usar. Se non podes usar avatares é logo por unha decisión do administrador e deberás contactar con el para coñecer as súas razóns.'
	),
	array(
		0 => 'Que é o meu rango e como podo mudalo?',
		1 => 'Os rangos, amosados embaixo do teu nome de usuario, indican a cantidade de mensaxes que publicaches ou identifican certos usuarios coma, p.e. moderadores e administradores. En xeral, non poderás modificar directamente rango ningún do taboleiro xa que son configurados polo administrador. Por favor, non abuses dos foros publicando mensaxes innecesarias só para aumentar o teu rango. A meirande parte dos taboleiros non tolerarán tal cousa e o moderador ou administrador sinxelamente reducirán o teu contador de mensaxes publicadas.'
	),
	array(
		0 => 'Cando premo sobre a ligazón de correo-e dun usuario pídeme que inicie unha sesión de usuario?',
		1 => 'Só os usuarios rexistrados poden enviar correo-e a outros usuarios a traverso do formulario integrado, e só se o administrador habilitou esa posibilidade. Isto faise para previr o uso malintencionado do sistema de correo-e por parte de usuarios anónimos.'
	),
	array(
		0 => '--',
		1 => 'Cuestións de publicación de mensaxes'
	),
	array(
		0 => 'Como podo publicar unha mensaxe nun foro?',
		1 => 'Para publicar un novo tema nun foro, preme no botón correspondente das pantallas do foro ou dos temas. É posíbel que precises rexistrarte denantes que poidas publicar unha mensaxe. As posibilidades que tes dispoñíbeis aparecen listadas na parte inferior da pantalla dos foros e temas. Aquelo de: Podes publicar novos temas, Podes votar nas enquisas, etc.'
	),
	array(
		0 => 'Como podo editar ou borrar unha mensaxe?',
		1 => 'A menos que sexas o administrador ou moderador do foro só podes borrar ou editar as mensaxes que enviaches ti mesmo. Podes editar unha mensaxe (moitas veces só por un tempo limitado logo de ser publicada) premendo no botón de edición da mesma. ISe alguén xa respondeu á mensaxe, atoparás un pequeno texto ao pé da corrección indicando o número de veces que foi modificada canda a data e a hora. Isto non aparecerá se non hai ainda respostas ou se foi un moderador ou o administrador quen a editou, aínda que a maioría das veces deixan unha mensaxe aclaratoria de que alteraron e o porqué. Ten en conta que os usuarios normais non poden borrar unha mensaxe unha vez que esta foi respostada.'
	),
	array(
		0 => 'Como podo engadir unha sinatura á miña mensaxe?',
		1 => 'Para inserir unha sinatura na túa mensaxe primeiro debes crear unha mediante o teu Panel de Control de Usuario. Unha vez creada, podes activar a opción <em>Engadir sinatura</em> no formulario de redacción de mensaxes para engadila. Tamén podes facer que todas as túas novas mensaxes teñan a túa sinatura por defecto, activando a opción correspondente no teu perfil. Se fas tal cousa, tamén podes evitar que a túa sinatura sexa engadida en determinadas mensaxes desactivando a opción de engadir sinatura no formulario de publicación da mesma.'
	),
	array(
		0 => 'Como podo crear unha enquisa?',
		1 => 'Cando inicies un novo tema ou edites a primeira mensaxe dun tema, preme na pestana “Crear unha enquisa” baixo do formulario principal de edición da mensaxe; se non a ves, o máis probable é que non teñas permisos axeitados para crear enquisas. Insire un título e, polo menos, dúas opcións nos campos correspondentes, asegurándote de que cada opción está nunha liña distinta na área de texto. Tamén podes escoller o número de opcións que os usuarios poderán seleccionar durante a votación na sección “Opcións por usuario”, un tempo límite en días para a enquisa (insire 0 se queres que dure indefinidamente) e, por último, a opción para permitir aos usuarios corrixir os seus votos.'
	),
	array(
		0 => 'Por que non podo engadir máis opcións a unha enquisa?',
		1 => 'O límite de opcións para unha enquisa determínao o administrador do taboleiro. Se pensas que precisas engadir máis opcións á túa enquisa das que están permitidas, contacta co administrador dos foros.'
	),
	array(
		0 => 'Como podo editar ou eliminar unha enquisa?',
		1 => 'Do mesmo xeito que coas mensaxes, as enquisas só poden ser editadas por quen as publicou, un moderador, ou polo administrador do foro. Para editar unha enquisa preme na primeira mensaxe do tema, a cal terá sempre a enquisa asociada con ela. Se ninguén votou entón os usuarios poden borrar a enquisa ou editar calquera opción da mesma. Porén, se alguén efectou xa o seu voto só os moderadores ou administradores poderán editala ou borrala. Isto faise para evitar que a xente ensarille as enquisas mudando as súas opcións no medio dun proceso de votación.'
	),
	array(
		0 => 'Por que non podo acceder a algún foro?',
		1 => 'Algúns foros están limitados a certos grupos ou usuarios. Para velos, ler, publicar mensaxes, editar, etc, pode que precises certas autorizacións, que só che pode dar un moderador ou administrador do foro, polo que deberás contactar con eles.'
	),
	array(
		0 => 'Por que non podo engadir adxuntos?',
		1 => 'Os permisos para engadir adxuntos son adxudicados basicamente a foros, grupos ou usuarios. Pode que o administrador do taboleiro non permita o engadido de adxuntos non foro concreto no que estás a publicar mensaxes, ou ben é posible que só certos grupos teñan permitido a inclusión de adxuntos nas mensaxes publicadas. Contacta co administrador do taboleiro se non estás certo de por que non podes engadir adxuntos.'
	),
	array(
		0 => 'Por que recibín unha advertencia?',
		1 => 'Cada administrador ten o seu propio conxunto de normas que rexerán no seu sitio. SeSe contrviñeches algunha delas, pode que recibas unha advertencia. Ten en conta que isto é unha decisión do administrador do taboleiro, polo que o phpBB Group non pode facer ren con respecto ás advertencias recibidas polo sitio en cuestión. Contacta co administrador do taboleiro se non estás certo do motivo polo que foches advertido.'
	),
	array(
		0 => 'Como podo facer informes dunha mensaxe para un moderador?',
		1 => 'Se o administrador do taboleiro habilitou a opción correspondente, poderás ver un botón para enviar informes de mensaxes a carón da mensaxe da que queres informar. Premendo nel, serás guiado a traverso dos chanzos precisos para emitir o informe verbo da mensaxe.'
	),
	array(
		0 => 'Para que serve o botón “Gardar” que aparece na publicación de temas?',
		1 => 'Isto permeterache gardar anacos que queiras completar e enviar posteriormente. Para recargar un anaco gardado, visita o Panel de Control de Usuario.'
	),
	array(
		0 => 'Por que a miña mensaxe ten que ser aprobada?',
		1 => 'Pode ser que o administrador do taboleiro teña decidido que as mensaxes do foro no que estás a tentar publicar requiran unha revisión previa denantes da súa publicación. Tamén podería ser que pertenzas a un grupo de usuarios que precisan control previo das súas mensaxes antes de seren publicadas, e no que foches ubicado polo administrador. Contacta co mesmo para obter máis información.'
	),
	array(
		0 => 'Como podo reactivar o meu tema?',
		1 => 'Premendo na ligazón “Reactivar tema” cando a poidas ver, podes “reactivar” o tema de xeito que aparecerá enriba do foro, na súa primeira páxina. Porén, se non podes ver a ligazón, pode que a reactivación de temas estea desactivada ou que non se chegara aínda ao tempo mínimo entre reactivacións. Tamén é posible reactivar un tema sinxelamente engadíndolle unha resposta, aínda que deberás asegurarte de cumprir coas regras do taboleiro cando o fagas.'
	),
	array(
		0 => '--',
		1 => 'Cuestións de formateo de mensaxes e Tipos de Temas'
	),
	array(
		0 => 'Que é o código BBCode?',
		1 => 'O BBCode é unha implementación especial do HTML, que ofrece un grande control de formato en determinados obxectos dunha mensaxe publicada. A posibilidade de usar o BBCode nas mensaxes publicadas nos foros é determinada polo administrador. Asemade, podes desactivar o BBCCode nunha mensaxe determinada a través do formulario de publicación da mesma. O BBCode é moi similar no estilo ao HTML, aínda que as etiquetas van entre corchetes [ e ] en troques de &lt; e &gt;.  Para máis información podes ver o manual de BBCode, na ligazón que aparece cada vez que vas publicar unha mensaxe.'
	),
	array(
		0 => 'Podo usar HTML?',
		1 => 'Non. Non é posible publicar HTML neste taboleiro de xeito que sexa interpretado e amosado o seu resultado. A meirande parte dos formatos que se poden obter co HTML poden ser tamén acadados co uso do BBCode no seu lugar.'
	),
	array(
		0 => 'Que son os Risoños?',
		1 => 'Os Risoños, Smilies, ou Emoticonas, son pequenos gráficos que poden usarse para expresar emocións utilizando un pequeno código, por exemplo, :) significa ledo, namentres :( significa triste. A lista completa de risoños pode verse no formulario que aparece cando publicas unha mensaxe. Porén, tenta non abusar dos risoños, xa que poden de xeito doado converter unha mensaxe en ilexíbel e o moderador pode decidir editala ou borrala completamente. Tamén é posible que o administrador do taboleiro configurase a cantidade máxima de risoños que podes utilizar nunha mensaxe publicada.'
	),
	array(
		0 => 'Podo publicar imaxes?',
		1 => 'Si, pódense amosar imaxes nas túas mensaxes publicadas. Se o administrador habilitou a posibilidade de engadir adxuntos, pode que esteas autorizado a subir a imaxe ao taboleiro. Caso contrario, deberás ligar a unha imaxe almacenada nun servidor web accesible publicamente, é dicir, http://www.exemplo.com/a-minha-imaxe.gif. Non podes ligar a imaxes gardadas no teu propio PC (a menos que sexa un servidor accesíbel públicamente) nin a imaxes gardadas tras mecanismos de identificación como as caixas de correo de Hotmail ou Yahoo, sitios protexidos por contrasinal, etc. Para amosar unha imaxe utiliza a etiqueta [img] do BBCode.'
	),
	array(
		0 => 'Que son os Anuncios Globais?',
		1 => 'Os Anuncios Globais conteñen información importante e debes lelos sempre que sexa posíbel. Aparecerán na parte superior de todos os foros e tamén no teu Panel de Control de Usuario. Os permisos para publicar Anuncios Globais son determinados polo administrador do taboleiro.'
	),
	array(
		0 => 'Que son os anuncios?',
		1 => 'Os anuncios adoitan conter información importante para o foro que estás a ver e deberías lelos sempre que che sexa posíbel. Os anuncios aparecen na parte superior de cada páxina do foro no que foron publicados. Do mesmo xeito que cos anuncios globais, os permisos para publicar anuncios son determinados polo administrador do taboleiro.'
	),
	array(
		0 => 'Que son os temas destacados?',
		1 => 'Os temas destacados aparecen debaixo dos anuncios na vista do foro e só na primeira páxina. Adoitan ser importantes de abondo como para lelos sempre que che sexa posíbel. Do mesmo xeito que cos anuncios e anuncios globais, os permisos para publicar temas destacados son determinados polo administrador do taboleiro.'
	),
	array(
		0 => 'Que son os temas pechados ou bloqueados?',
		1 => 'Nos temas pechados ou bloqueados os usuarios non poden xa publicar respostas e asemade calquera enquisa que conteñan é rematada de xeito automático. Os temas poden ser pechados por varias razóns e poden ser configurados neste xeito tanto polo moderador do foro coma polo administrador do taboleiro. Tamén é posible que poidas pechar os teus propios temas dependendo dos permisos que teñas asignados por parte do administrador do taboleiro.'
	),
	array(
		0 => 'Que son as iconas de tema?',
		1 => 'As iconas de tema son imaxes escollidas polo autor asociadas coas mensaxes publicadas para indicar o seu contido. A posibilidade de usar iconas de tema depende dos permisos concedidos polo administrador do taboleiro.'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0 => '--',
		1 => 'Niveis de usuario e grupos'
	),
	array(
		0 => 'Que son os Administradores?',
		1 => 'Os Administradores son membros aos que se lles asignou o máis alto nivel de control sobre o taboleiro enteiro. Estes membros poden controlar todos os aspectos relativos ao funcionamento do mesmo incluindo concesión de permisos, bloqueo ou prohibición de usuarios, creación de grupos de usuarios ou moderadores, etc., dependendo do fundador do taboleiro e dos permisos que concedese aos outros administradores. Asemade teñen capacidade absoluta para actuar como moderadores en calquera dos foros, tamén en función da configuración estabelecida polo fundador do taboleiro.'
	),
	array(
		0 => 'Que son os Moderadores?',
		1 => 'Os Moderadores son persoas (ou grupos de persoas) que teñen como tarefa vixiar os foros a diario. Teñen autoridade para editar ou borrar mensaxes publicadas e bloquear, desbloquear, mover, borrar e dividir temas no foro que moderan. Xeralmente os moderadores están presentes para previr que a xente publique mensaxes fóra do tema (off-topic) ou de contido abusivo ou ofensivo.'
	),
	array(
		0 => 'Que son os grupos de usuarios?',
		1 => 'A comunidade está dividida en grupos de usuarios como seccións manexables da mesma de xeito que os administradores do taboleiro poden traballar con elas dun xeito máis doado. Cada usuario pode pertencer a varios grupos e a cada grupo pódenselle asignar dereitos de acceso individuais. Deste xeito facilítaselles aos administradores o troco de permisos a varios usuarios ao mesmo tempo, como no caso de mudar permisos de moderación, ou darlles acceso a un foro privado.'
	),
	array(
		0 => 'Onde están os grupos de usuarios e como podo unirme a un deles?',
		1 => 'Podes ver un listado de todos os grupos de usuarios premendo na ligazón “Grupos de usuarios” do teu Panel de Control de Usuario. Se queres unirte a un deles, deberás premer no botón correspondente. Porén, non todos os grupos teñen acceso aberto, e algúns poden requerir aprobación para unirse a eles, outros poden ser restrinxidos e mesmo pode habelos ocultos. Se o grupo é aberto, podes, como ya dixemos, unirte ao mesmo premendo no botón apropiado. Se o grupo precisa aprobación previa á incorporación de usuarios podes solicitar a mesma premendo tamén no botón axeitado. O xefe do grupo de usuarios deberá aprobar a túa solicitude e pode ser que che pregunte polas túas razóns para querer incorporarte ao mesmo. Por favor, non fustrigues ao xefe do grupo no caso de que rexeite a túa petición; terá os seus motivos para facelo.'
	),
	array(
		0 => 'Como podo ser xefe dun grupo de usuarios?',
		1 => 'Normalmente asígnase un xefe de grupo de usuarios cando este se crea inicialmente por parte dun administrador do taboleiro. Se estás interesado en crear un grupo de usuarios, o teu primeiro punto de contacto debe ser un dos administradores; proba a enviarlle unha mensaxe privada.',
	),
	array(
		0 => 'Por que algúns dos grupos de usuarios aparecen en distinta cor?',
		1 => 'O administrador do taboleiro pode asignar unha cor determinada aos membros dun grupo de usuarios para facilitar a identificación dos mesmos.'
	),
	array(
		0 => 'Que é un “Grupo de usuarios predeterminado”?',
		1 => 'Se es membro de máis dun grupo de usuarios, o teu predeterminado será o que se use para definir a cor e rango de grupo que se amosará para ti por defecto. O administrador do taboleiro pode concederche permisos para mudar o teu grupo de usuarios predeterminado a traverso do teu Panel de Control de Usuario.'
	),
	array(
		0 => 'Que é a ligazón “O equipo”?',
		1 => 'Esta páxina ofréceche unha lista do personal que administra o taboleiro, incluindo os administradores do mesmo e os moderadores canda outros pormenores coma os foros que moderan.'
	),
	array(
		0 => '--',
		1 => 'Mensaxería privada'
	),
	array(
		0 => 'Non podo enviar mensaxes privadas!',
		1 => 'Hai tres posibeis razóns: Non estás rexistrado ou non iniciaches a sesión, o administrador deshabilitou o sistema de mensaxes privadas para todo o foro ou o administrador deshabilitou para ti individualmente a mensaxería privada. Contacta con algún administrador do taboleiro para obter máis información.'
	),
	array(
		0 => 'Sigo a recibir mensaxes privadas non desexadas!',
		1 => 'Podes bloquear o envío de mensaxes privadas por parte dun usuario concreto utilizando as regras de mensaxes que atoparás no teu Panel de Control de Usuario. Se estás a recibir mensaxes privadas abusivas por parte dun usuario determinado, informa a algún dos administradores do taboleiro; eles teñen a capacidade de evitar que o usuario en cuestión envíe mensaxes privadas.'
	),
	array(
		0 => 'Recibín spam ou correos abusivos procedentes de alguén neste foro!',
		1 => 'Sentimos moito ouvir isto. A característica de envío de correos-e deste foro inclúe procedementos que tentan controlar aos usuarios que efectúan tales envíos, polo que podes contactar co administrador do foro incluindo unha copia completa do correo-e que recibiches tal e como viña, incluindo cabeceiras (moi importante, xa que estas especifican os detalles do usuario remitente da mensaxe). O administrador do taboleiro poderá entón tomar as medidas precisas.'
	),
	array(
		0 => '--',
		1 => 'Amigos e Inimigos'
	),
	array(
		0 => 'Que son as miñas listas de Amigos e Inimigos?',
		1 => 'Podes utilizar estas listas para organizar aos outros membros do taboleiro. Os membros engadidos á túa lista de amigos serán amosados no teu Panel de Control de Usuario para que poidas coñecer de xeito doado o seu estado en liña e para poder enviarlles mensaxes privadas. Dependendo de que a sobreplanta o permita, as mensaxes destes usuarios poden aparecer tamén resaltadas. Se engades un usuario á túa lista de inimigos, calquera mensaxe publicada polo mesmo agocharase por defecto.'
	),
	array(
		0 => 'Como podo engadir ou eliminar usuarios das miñas listas de Amigos ou Inimigos?',
		1 => 'Hai dous xeitos de engadir usuarios ás túas listas. No perfil de cada un dos usuarios hai senllas ligazóns para poder engadilos á túa lista de Amigos ou de Inimigos. De xeito alternativo, podes engadir usuarios inserindo o seu nome directamente no teu Panel de Control de Usuario. Podes tamén eliminar usuarios das túas listas utilizando a mesma páxina.'
	),
	array(
		0 => '--',
		1 => 'Procurando nos foros'
	),
	array(
		0 => 'Como podo procurar nun foro ou foros?',
		1 => 'Insire un termo de procura na caixa de busca ubicada no índice, foro ou páxinas de temas. Podes acceder á procura avanzada premendo na ligazón “Procura Avanzada” dispoñible en todas as páxinas do foro. O procedemento de acceso á procura pode depender do estilo utilizado.'
	),
	array(
		0 => 'Por que a miña procura non amosa resultados?',
		1 => 'Pode que a túa procura fose indefinida de máis e incluise varios termos comúns que o phpBB3 non indexa. Tenta ser máis específico e utiliza as opcións dispoñibeis na Procura avanzada.'
	),
	array(
		0 => 'Por que a miña procura amosa unha páxina en branco!?',
		1 => 'A túa procura devolveu demasiados resultados e o servidorn web non puido xestionalos. Utiliza a “Procura avanzada” e mira de ser máis específico cos termos inseridos e os foros nos que queres buscar.'
	),
	array(
		0 => 'Como podo atopar membros?',
		1 => 'Vai á páxina de “Membros” e preme na ligazón “Procurar un membro”.'
	),
	array(
		0 => 'Como podo atopar os meus propios temas e mensaxes publicadas?',
		1 => 'Podes acceder ás túas mensaxes publicadas ben premendo na ligazón “Procurar mensaxes publicadas por un usuario” no Panel de Control de Usuario ou ben a traverso da páxina do teu perfil. Para procurar os teus temas, utiliza a páxina de Procura avanzada e cubre as diversas opcións como sexa preciso.'
	),
	array(
		0 => '--',
		1 => 'Subscripcións a Temas e Favoritos'
	),
	array(
		0 => 'Cal é a diferenza entre marcar como favorito e subscribirse?',
		1 => 'Marcar como favorito no phpBB3 é moito máis que facelo no teu navegador web. Non serás avisado cando haxa unha actualización, pero poderás volver ao tema máis tarde. A suscripción, porén, notificarate cando haxa unha actualización no tema ou foro do taboleiro mediante o método ou métodos que prefiras.'
	),
	array(
		0 => 'Como podo subscribirme a foros ou temas específicos?',
		1 => 'Para subscribirte a un foro concreto, preme na ligazón “Subscribirse ao foro” logo de entrar no mesmo. Para subscribirte a un tema, resposta ao mesmo coa caixa da opción de subscrición marcada ou preme na ligazón “Subscribirse ao tema” no propio tema.'
	),
	array(
		0 => 'Como podo eliminar as miñas subscricións?',
		1 => 'Para eliminar as túas subscricións, vai ao teu Panel de Control de Usuario e segue as ligazóns deica as mesmas.'
	),
	array(
		0 => '--',
		1 => 'Adxuntos'
	),
	array(
		0 => 'Que adxuntos se permiten neste taboleiro?',
		1 => 'Cada administrador de taboleiro pode permitir ou prohibir certos tipos de adxuntos. Se non estás certo dos tipos permitidos para subir, contacta co administrador do taboleiro e solicita información.'
	),
	array(
		0 => 'Como podo atopar todos os meus adxuntos?',
		1 => 'Para atopar a lista de adxuntos que subiches, vai ao teu Panel de Control de Usuario e segue a ligazón deica a sección de adxuntos.'
	),
	array(
		0 => '--',
		1 => 'Cuestións do phpBB 3'
	),
	array(
		0 => 'Quen programou este foro?',
		1 => 'Esta aplicación (na súa forma orixinal) é producida, ceibada e con dereitos de autor pertencentes ao <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Está feito baixo da GNU (Licenza Pública Xeral) e é de distribución ceibe. Preme na ligazón para coñecer os pormenores.'
	),
	array(
		0 => 'Por que este foro non ten a característica X dispoñíbel?',
		1 => 'Este foro foi escrito e licenzado a través do phpBB Group. Se cres que debería ter algunha outra opción ou característica visita phpbb.com e mira o que o phpBB Group ten que dicir. Por favor, non publiques mensaxes dese tipo nos foros de phpBB.com, xa que phpBB Group utiliza o Sourceforge para xestionar as tarefas de novas características. Por favor, recorre os foros e mira cal é, se a temos, a nosa postura concreta para determinadas características e logo segue o procedemento aquí descrito.'
	),
	array(
		0 => 'Con quen podo contactar sobre abusos e/ou asuntos legais relacionados con este taboleiro?',
		1 => 'Calquera dos administradores listados na páxina “O equipo” pode ser un punto de contacto axeitado para amosarlle as túas queixas. Se aínda así segues sen obter resposta podes contactar co propietario do dominio (fai unha <a href="http://www.google.com/search?q=whois">procura whois</a>) ou, se se o sitio funciona nun servizo de balde (p.e. Yahoo!, free.fr, f2s.com, etc.), co departamento de xestión ou abusos do mesmo. Ten en conta que o phpBB Group <strong>non ten xurisdicción ningúnha en absoluto</strong> e non pode ser responsabilizado de xeito ningún sobor como, donde ou por quen sexa utilizado este taboleiro. É absolutamente inútil contactar co phpBB Group en relación con calquera asunto legal (cese ou suspensión, responsabilidade, comentarios difamatorios, etc.) <strong>non directamente relacionado</strong> co sitio web phpBB.com ou co sofware concreto do phpBB. Se envías un correo-e ao phpBB Group <strong>sobre calquera uso por unha terceira parte</strong> deste software recibirás unha resposta concisa ou non recibirás resposta ningunha.'
	)
);

?>