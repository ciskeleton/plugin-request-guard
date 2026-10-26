<?php

/**
 * Plugin Information File
 *
 * Provides metadata for the OAuth Authentication plugin, allowing the
 * plugin manager and marketplace to identify, display, and manage it.
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  RequestGuard
 * @category    Security
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

return [
	// Info
	'name' => 'Request Guard',
	'description' => 'Lightweight per-request limiter that prevents excessive bootstrapping or malicious request flooding during the `pre_system` phase.',
	'version' => '0.0.1',
	'version_id' => 1,
	'repository' => 'https://github.com/ciskeleton/plugin-request-guard',

	// Presentation.
	'icon' => 'shield-halved',
	'icon_fg' => '#ffffff',
	'icon_bg' => '#2e8540',

	// Author.
	'author' => [
		'name' => Platform::AUTHOR,
		'url' => Platform::AUTHOR_URL,
	],

	// License.
	'license' => [
		'name' => 'MIT',
		'url' => 'https://opensource.org/license/mit',
	],

	// Translations.
	'translations' => [
		// Arabic
		'arabic' => [
			'name' => 'حارس الطلبات',
			'description' => 'نظام بسيط لتحديد عدد الطلبات يمنع التحميل الزائد أو الهجمات خلال مرحلة `pre_system`.',
		],

		// Armenian
		'armenian' => [
			'name' => 'Հարցումների պաշտպան',
			'description' => 'Թեթև սահմանափակիչ յուրաքանչյուր հարցման համար, որը կանխում է չափազանց մեծ բեռնավորումը կամ վնասակար հարցումների հոսքը `pre_system` փուլում։',
		],

		// Azerbaijani
		'azerbaijani' => [
			'name' => 'Request Guard',
			'description' => '`pre_system` mərhələsində həddindən artıq ilkin yükləmənin və ya zərərli sorğu axınının qarşısını alan, sorğu səviyyəsində işləyən yüngül məhdudlaşdırıcı vasitə.',
		],

		// Bengali
		'bengali' => [
			'name' => 'অনুরোধ রক্ষী',
			'description' => 'প্রতি অনুরোধের জন্য হালকা সীমাবদ্ধকারী, যা `pre_system` ধাপে অতিরিক্ত বুটস্ট্র্যাপিং বা ক্ষতিকর অনুরোধের বন্যা প্রতিরোধ করে।',
		],

		// Brazilian Portuguese
		'brazilian' => [
			'name' => 'Guarda de Requisições',
			'description' => 'Limitador leve por requisição que impede sobrecarga ou solicitações maliciosas durante a fase `pre_system`.',
		],

		// Bulgarian
		'bulgarian' => [
			'name' => 'Пазач на заявки',
			'description' => 'Лек лимитер, който предотвратява прекомерни заявки или злонамерени атаки по време на фазата `pre_system`.',
		],

		// Catalan
		'catalan' => [
			'name' => 'Guarda de sol·licituds',
			'description' => 'Limitador lleuger per sol·licitud que evita l’arrencada excessiva o l’allau de sol·licituds malicioses durant la fase `pre_system`.',
		],

		// Simplified Chinese
		'chinese' => [
			'name' => '请求防护',
			'description' => '轻量级的请求限制器，可防止在 `pre_system` 阶段出现过多或恶意请求。',
		],

		// Croatian
		'croatian' => [
			'name' => 'Čuvar zahtjeva',
			'description' => 'Lagani limiter po zahtjevu koji sprječava pretjerano pokretanje ili zlonamjerno zatrpavanje zahtjevima tijekom faze `pre_system`.',
		],

		// Czech
		'czech' => [
			'name' => 'Strážce požadavků',
			'description' => 'Lehký limitovač požadavků zabraňuje nadměrnému zatížení nebo škodlivým požadavkům během fáze `pre_system`.',
		],

		// Danish
		'danish' => [
			'name' => 'Anmodningsvagt',
			'description' => 'Let begrænser pr. anmodning, der forhindrer overdreven bootstrapping eller ondsindet anmodningsoversvømmelse under `pre_system`-fasen.',
		],

		// Dutch
		'dutch' => [
			'name' => 'Verzoeksbewaker',
			'description' => 'Lichtgewicht verzoekslimiet per aanvraag die buitensporige initialisatie of kwaadaardige verzoekoverbelasting voorkomt tijdens de `pre_system`-fase.',
		],

		// Estonian
		'estonian' => [
			'name' => 'Päringukaitse',
			'description' => 'Kerge päringupõhine piiraja, mis takistab liigset alglaadimist või pahatahtlikku päringute tulva `pre_system` etapis.',
		],

		// Filipino
		'filipino' => [
			'name' => 'Bantay ng Kahilingan',
			'description' => 'Magaan na per-request limiter na pumipigil sa sobrang bootstrapping o mapaminsalang pagbaha ng kahilingan sa yugto ng `pre_system`.',
		],

		// Finnish
		'finnish' => [
			'name' => 'Pyyntövahti',
			'description' => 'Kevyt pyyntökohtainen rajoitin, joka estää liiallisen alustuksen tai haitallisen pyyntötulvan `pre_system`-vaiheen aikana.',
		],

		// French
		'french' => [
			'name' => 'Garde des requêtes',
			'description' => 'Limiteur léger de requêtes empêchant la surcharge ou les requêtes malveillantes pendant la phase `pre_system`.',
		],

		// Georgian
		'georgian' => [
			'name' => 'მოთხოვნების მცველი',
			'description' => 'მსუბუქი შეზღუდველი თითო მოთხოვნაზე, რომელიც `pre_system` ფაზაში ზედმეტ ჩატვირთვას ან მავნე მოთხოვნების ნაკადს აფერხებს.',
		],

		// German
		'german' => [
			'name' => 'Anfragewächter',
			'description' => 'Leichter Anfragenschutz, der übermäßige oder bösartige Anfragen in der `pre_system`-Phase verhindert.',
		],

		// Greek
		'greek' => [
			'name' => 'Φύλακας αιτημάτων',
			'description' => 'Ελαφρύς περιοριστής ανά αίτημα που αποτρέπει υπερβολική εκκίνηση ή κακόβουλη πλημμύρα αιτημάτων κατά τη φάση `pre_system`.',
		],

		// Hindi
		'hindi' => [
			'name' => 'रिक्वेस्ट गार्ड',
			'description' => 'एक हल्का अनुरोध सीमक जो `pre_system` चरण के दौरान अत्यधिक या हानिकारक अनुरोधों को रोकता है।',
		],

		// Hungarian
		'hungarian' => [
			'name' => 'Kérésőr',
			'description' => 'Könnyű kérésenkénti korlátozó, amely megakadályozza a túlzott betöltést vagy a rosszindulatú kérésáradatot a `pre_system` fázisban.',
		],

		// Indonesian
		'indonesian' => [
			'name' => 'Penjaga Permintaan',
			'description' => 'Pembatas permintaan ringan yang mencegah permintaan berlebihan atau berbahaya selama fase `pre_system`.',
		],

		// Italian
		'italian' => [
			'name' => 'Guardia Richieste',
			'description' => 'Limitatore leggero per richieste che previene sovraccarichi o richieste dannose nella fase `pre_system`.',
		],

		// Japanese
		'japanese' => [
			'name' => 'リクエストガード',
			'description' => '`pre_system` フェーズ中の過剰または悪意のあるリクエストを防ぐ軽量なリクエストリミッター。',
		],

		// Khmer
		'khmer' => [
			'name' => 'Request Guard',
			'description' => 'ជាឧបករណ៍កម្រិតចំនួនសំណើ (per-request limiter) ដែលមានទំហំតូច និងជួយការពារការដំណើរការចាប់ផ្តើមប្រព័ន្ធ (bootstrapping) លើសកម្រិត ឬការវាយប្រហារដោយការបញ្ជូនសំណើចូលមកក្នុងចំនួនដ៏ច្រើនលើសលប់ (flooding) ក្នុងអំឡុងពេលដំណាក់កាល `pre_system`។',
		],

		// Korean
		'korean' => [
			'name' => '요청 가드',
			'description' => '`pre_system` 단계에서 과도하거나 악의적인 요청을 방지하는 가벼운 요청 제한기입니다.',
		],

		// Latvian
		'latvian' => [
			'name' => 'Pieprasījumu sargs',
			'description' => 'Viegls ierobežotājs katram pieprasījumam, kas novērš pārmērīgu sāknēšanu vai ļaunprātīgu pieprasījumu plūdus `pre_system` fāzē.',
		],

		// Lithuanian
		'lithuanian' => [
			'name' => 'Užklausų sargas',
			'description' => 'Lengvas ribotuvas kiekvienai užklausai, kuris neleidžia pertekliniam paleidimui ar kenkėjiškam užklausų antplūdžiui `pre_system` fazėje.',
		],

		// Malay
		'malay' => [
			'name' => 'Pengawal Permintaan',
			'description' => 'Pengehad ringan bagi setiap permintaan yang menghalang pemuatan berlebihan atau limpahan permintaan berniat jahat semasa fasa `pre_system`.',
		],

		// Marathi
		'marathi' => [
			'name' => 'रिक्वेस्ट गार्ड',
			'description' => 'हलके प्रति-रिक्वेस्ट लिमिटर जे `pre_system` फेज दरम्यान अत्याधिक बूटस्ट्रॅपिंग किंवा दुर्भावनापूर्ण रिक्वेस्ट फ्लडिंगला प्रतिबंधित करते.',
		],

		// Norwegian
		'norwegian' => [
			'name' => 'Forespørselsvakt',
			'description' => 'Lett begrenser per forespørsel som hindrer overdreven oppstart eller ondsinnet forespørselsflom under `pre_system`-fasen.',
		],

		// Persian
		'persian' => [
			'name' => 'محافظ درخواست',
			'description' => 'یک محدودکننده سبک برای جلوگیری از درخواست‌های بیش از حد یا مخرب در مرحله `pre_system`.',
		],

		// Polish
		'polish' => [
			'name' => 'Strażnik żądań',
			'description' => 'Lekki ogranicznik żądań zapobiegający przeciążeniu lub złośliwym żądaniom podczas fazy `pre_system`.',
		],

		// European Portuguese
		'portuguese' => [
			'name' => 'Guarda de Requisições',
			'description' => 'Limitador leve por requisição que impede sobrecarga ou solicitações maliciosas durante a fase `pre_system`.',
		],

		// Romanian
		'romanian' => [
			'name' => 'Gardianul cererilor',
			'description' => 'Limitator ușor per cerere care previne inițializarea excesivă sau inundarea malițioasă cu cereri în timpul fazei `pre_system`.',
		],

		// Russian
		'russian' => [
			'name' => 'Страж запросов',
			'description' => 'Легковесный ограничитель запросов, предотвращающий перегрузку или вредоносные запросы во время этапа `pre_system`.',
		],

		// Serbian (Latin)
		'serbian' => [
			'name' => 'Čuvar zahteva',
			'description' => 'Lagani limiter po zahtevu koji sprečava prekomerno pokretanje ili zlonamerno zatrpavanje zahtevima tokom faze `pre_system`.',
		],

		// Slovak
		'slovak' => [
			'name' => 'Strážca požiadaviek',
			'description' => 'Ľahký obmedzovač pre každú požiadavku, ktorý zabraňuje nadmernému spúšťaniu alebo škodlivému zahlcovaniu požiadavkami počas fázy `pre_system`.',
		],

		// Slovenian
		'slovenian' => [
			'name' => 'Varuh zahtev',
			'description' => 'Lahek omejevalnik za vsak zahtevek, ki preprečuje pretirano zaganjanje ali zlonamerno poplavo zahtev med fazo `pre_system`.',
		],

		// Spanish
		'spanish' => [
			'name' => 'Guardia de Solicitudes',
			'description' => 'Limitador ligero que evita la sobrecarga o solicitudes maliciosas durante la fase `pre_system`.',
		],

		// Swahili
		'swahili' => [
			'name' => 'Mlinzi wa Maombi',
			'description' => 'Kikomo chepesi kwa kila ombi kinachozuia uanzishaji kupita kiasi au mafuriko ya maombi hasidi wakati wa awamu ya `pre_system`.',
		],

		// Swedish
		'swedish' => [
			'name' => 'Förfrågningsvakt',
			'description' => 'Lätt begränsare per förfrågan som förhindrar överdriven uppstart eller skadlig förfrågningsflod under `pre_system`-fasen.',
		],

		// Traditional Chinese
		'taiwanese' => [
			'name' => '請求防衛',
			'description' => '輕量級的請求限制器，可防止在 `pre_system` 階段出現過多或惡意請求。',
		],

		// Tamil
		'tamil' => [
			'name' => 'கோரிக்கை காவலர்',
			'description' => '`pre_system` கட்டத்தில் அதிகப்படியான பூட்ஸ்ட்ராப்பிங் அல்லது தீங்கிழைக்கும் கோரிக்கை வெள்ளத்தைத் தடுக்கும் இலகுரக ஒவ்வொரு கோரிக்கைக்கான கட்டுப்படுத்தி.',
		],

		// Thai
		'thai' => [
			'name' => 'การคุ้มครองคำขอ',
			'description' => 'ตัวจำกัดคำขอต่อครั้งแบบน้ำหนักเบา ช่วยป้องกันการเรียกใช้งานเกินจำเป็นหรือการโจมตีด้วยคำขอจำนวนมากในระหว่างขั้นตอน `pre_system`.',
		],

		// Turkish
		'turkish' => [
			'name' => 'İstek Koruması',
			'description' => '`pre_system` aşamasında aşırı veya kötü niyetli istekleri önleyen hafif bir istek sınırlayıcıdır.',
		],

		// Ukrainian
		'ukrainian' => [
			'name' => 'Захисник запитів',
			'description' => 'Легкий обмежувач для кожного запиту, який запобігає надмірному завантаженню або шкідливому потоку запитів під час фази `pre_system`.',
		],

		// Urdu
		'urdu' => [
			'name' => 'درخواست محافظ',
			'description' => 'ہر درخواست کے لیے ہلکا محدود کنندہ جو `pre_system` مرحلے کے دوران حد سے زیادہ بوٹسٹریپنگ یا نقصان دہ درخواستوں کے سیلاب کو روکتا ہے۔',
		],

		// Vietnamese
		'vietnamese' => [
			'name' => 'Trình bảo vệ yêu cầu',
			'description' => 'Bộ giới hạn yêu cầu nhẹ giúp ngăn quá tải hoặc yêu cầu độc hại trong giai đoạn `pre_system`.',
		]
	]
];
