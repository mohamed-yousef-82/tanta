-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 03:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanta`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `video` longtext NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name_ar`, `name_en`, `details_ar`, `details_en`, `video`, `file`) VALUES
(1, 'about us', '', 'we are new technology company', '', '                    <iframe src=\"https://www.youtube.com/embed/hrRA70SdwIk\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen=\"\"></iframe>\r\n', 'upload/file_155387283415.png');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `file` longtext NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `file`, `cat_id`) VALUES
(1, 'first article', '', 'details about this article', '', 'upload/file_15543418348.jpg', 3),
(2, 'first article', '', '<p>we are new company in technologyfff</p>', '', 'upload/file_155442656912.jpg', 6),
(9, 'كلمة السيد رئيس الجامعة', '', '<div>\r\n<p style=\"text-align: right;\">أبنائي الطلاب .. زملائي السادة أعضاء هيئة التدريس والسادة العاملين بالجامعة شركاء النجاح .. السادة زائري موقع الجامعة الإلكتروني الكرام .. مرحبًا بكم&nbsp;<br />الجامعة هي الركيزة الأولى لتقدم المجتمع وخلق مواطن صالح قادر على الارتقاء بوطنه... فلم تعد مجرد قناة لتقديم العلم والتعلم فقط.&nbsp;<br />وانطلاقًا من رؤية مصر 2030 واهتمامها بتطوير الوطن بأيدي شبابه الصاعد وأفكاره المتجددة حددت جامعة طنطا رؤيتها ورسالتها تماشيًا مع تاريخها وكونها خامس جامعة مصرية أُنشئت منذ عام 1972 حيث تستقبل الجامعة نحو مائة ألف طالب سنويًا في مختلف التخصصات بكليات الجامعة وعددها (13) كلية بالإضافة إلى معهدًا فنيًا .. كما تستخدم وسائل التعلم الحديث والتعلم الإلكتروني والتعليم عن بعد لتخلق جيل مبدع ومتميز تعليميًا ومعرفيًا ذا مهارات خلاقة قادرة على المنافسة في سوق العمل.&nbsp;<br />وتتميز الجامعة بوجود مجموعة من \"البرامج الجديدة\" المقدمة لطلاب البكالوريوس والدراسات العليا والقائمة على العلوم البينية ، وأخرى للطلاب الوافدين الذين تتشرف الجامعة باستقبالهم سنويًا.&nbsp;<br />وإيمانًا من الجامعة بأهمية التبادل الثقافي مع الجامعات العربية والأجنبية ودول حوض النيل وبعض الهيئات المتخصصة في نقل العلم والتقدم التكنولوجي قامت الجامعة بإبرام العديد من الاتفاقيات العلمية والثقافية للوقوف على أحدث مستجدات العلم بالدول المتقدمة.&nbsp;<br />وكان لابد أن يكون لجامعة طنطا دورًا فاعلاً في المشاركة المجتمعية والبيئة المحيطة بها نظرًا لتوسطها محافظات الدلتا من خلال تنظيم القوافل الطبيه وتقديم الاستشارات والخدمات البيئية والقيام بتنظيم العديد من المؤتمرات العلمية والبيئية للوقوف على أحدث ما وصل إليه العلم في مختلف المجالات وكيفية تطبيقة وإيجاد الحلول العملية للمشكلات البيئية.&nbsp;<br />كما تقدم المستشفيات الجامعية خدماتها الطبية لأكثر من مائتى ألف مريض سنويًا من مواطني محافظات الدلتا وخاصة بعد افتتاح مستشفى جامعة طنطا التعليمي العالمي التي تم تجهيزها على أعلى مستوى من الأجهزة والمعدات الطبية.&nbsp;<br />وأخيرًا وليس آخرًا فإن الجامعة لا تستطيع أن تحقق أهدافها المنشودة إلا بتضافر جهود شركاء النجاح من السادة أعضاء هيئة التدريس والعاملين بها الذين لا يألون جهدًا في تقديم كل ما يستطيعون لكي تصبح جامعتنا في مصاف الجامعات العالمية.&nbsp;<br /><br /><br /></p>\r\n<p style=\"text-align: right;\">حفظ الله مصرنا الحبيبة</p>\r\n</div>\r\n<p style=\"text-align: right;\"><strong><a id=\"ctl00_ContentPlaceHolder1_HyperLink9\" href=\"http://tdb2.tanta.edu.eg/staff/MagdySabaa\">الصفحة الشخصية لرئيس الجامعة</a></strong></p>', '', 'upload/file_155745660214.png', 4),
(10, 'عن الجامعة', '', '<p>جامعة طنطا هي جامعة مصرية مقرها مدينة طنطا بمحافظة الغربية ، استقلت كجامعة عام 1972، بعد أن كانت فرعًا لجامعة الإسكندرية منذ إنشائها بموجب القرار الجمهوري رقم 1468 لسنة 1962، وهو القرار الذي نص على إنشاء كلية الطب بطنطا. ويبلغ عدد كليات الجامعة حالياً 13 كلية ومعهداً فنياً و هى كليات الطب البشري- العلوم - التربية - التجارة &ndash; الصيدلة - طب الأسنان - الآداب - الحقوق &ndash;التمريض - الهندسة - الزراعـة - التربية الرياضية &ndash; التربية النوعية ، بالإضافة الى المعهد الفني للتمريض و37 وحدة ذات طابع خاص.</p>', '', 'upload/file_15578970949.jpg', 4),
(12, 'هؤلاء من جامعة طنطا', 'Figures from Tanta University', '<h4 class=\"title\">د/ إيمان غنيم جيولوجية مصرية</h4>\r\n<ul>\r\n<li>تخرجت من علوم طنطا قسم الجيولوجيا وحصلت على الدكتوراه في عام 2002 من كلية الجغرافيا من جامعة ساوثهامبتون بالمملكة المتحدة</li>\r\n<li>هي جيولوجية مصرية متخصصة في مجال الجيومورفولوجيا، تعمل على تطبيق نظم المعلومات الجغرافية (GIS) و\"الاستشعار عن بعد\" واستخدام النمذجة الهيدرولوجية في خطر الفيضانات واستكشاف المياه الجوفية في البيئات القاحلة.</li>\r\n<li>انضمت إلى مركز جامعة بوسطن في مجال \"الاستشعار عن بعد\" في بداية عام 2003.</li>\r\n</ul>\r\n<h4 class=\"title\">د/أحمد خالد توفيق طبيب ومؤلف وروائي</h4>\r\n<ul>\r\n<li>التحق بطب طنطا حتى حصل على الدكتوراه في طب المناطق الحارة عام 1997 م</li>\r\n<li>أديب وصاحب سلاسل روايات منها: \"ما وراء الطبيعة\" و\"سافاري</li>\r\n<li>أول كاتب عربي في مجال أدب الرعب والأشهر في مجال أدب الشباب والفانتازيا والخيال العلمي ولقب بالعراب.</li>\r\n</ul>\r\n<h4 class=\"title\">د/نبيل فاروق طبيب وكاتب</h4>\r\n<ul>\r\n<li>التحق بطب طنطا و حصل علي درجة البكالوريوس في الطب والجراحة عام 1980</li>\r\n<li>كاتب مصري أشتهر بالأدب البوليسي والخيال العلمي أشهرها ملف المستقبل، ورجل المستحيل، وكوكتيل 2000</li>\r\n</ul>\r\n<h4 class=\"title\">د/ماجد القمري رئيس جامعة كفر الشيخ</h4>\r\n<ul>\r\n<li>تخرج من علوم طنطا قسم الكيمياء والطبيعة في 1981م حتى حصل على درجة الدكتوراه</li>\r\n<li>وعين معيدا في كلية التربية جامعة طنطا فرع كفر الشيخ ثم تدرج في الوظائف حتى حصل على لقب أستاذا بالكلية في 2004، كما شغل منصب عميد كلية في 2010، وأخيرا تولى رئاسة جامعة كفر الشيخ</li>\r\n</ul>\r\n<h4 class=\"title\">الأنبا بولا مطران طنطا للأقباط الأرثوذكس</h4>\r\n<ul>\r\n<li>تخرج من علوم طنطا قسم الجيولوجيا بتقدير عام جيد جدًا في 1974م</li>\r\n<li>أسقف طنطا للأقباط الأرثوذكس، ورئيس المجلس الاكليريكي فرع استراليا، ومسؤول الملف السياسي بالكنيسة.</li>\r\n<li>وأخيرا تم تنصيبه مطراناً لإبراشية طنطا وتوابعها</li>\r\n</ul>\r\n<h4 class=\"title\">د/ محمود صقر رئيس أكاديمية البحث العلمي والتكنولوجيا</h4>\r\n<ul>\r\n<li>تخرج من علوم طنطا قسم علوم النبات حتى حصل على درجة الدكتوراه</li>\r\n<li>تدرج في المناصب الدولية حتى تولى منصب رئيس أكاديمية البحث العلمي والتكنولوجيا، كما حصل على العديد من الجوائز العلمية.</li>\r\n</ul>\r\n<h4 class=\"title\">غادة عبد العال روائية وكاتبة</h4>\r\n<ul>\r\n<li>تخرجت من صيدلة طنطا وعملت كصيدلانية وأطلقت غادة على مدونتها بأنها:\"أنا أمثل 15 مليون بنت من سن 25 إلى سن 35 و اللي بيضغط عليهم المجتمع كل يوم عشان يتجوزوا مع انه مش بإديهم انهم لسه قاعدين\"</li>\r\n<li>بدأت مدونتها عايزة أتجوز في أغسطس 2006 ونشر كأول كتاب لها وتم ترجمته لأكثر من لغة، لها مقال ثابت في جريدة الشروق منذ فبراير 2009، كتبت في العديد من الجرائد و المجلات و المواقع الإلكترونية. .</li>\r\n</ul>\r\n<h4 class=\"title\">محمد فاروق أبوفرحة كاتب صحفي</h4>\r\n<ul>\r\n<li>تخرج من كلية العلوم جامعة طنطا</li>\r\n<li>له العديد من المقالات الأدبية والصحفية ومن مؤلفاته : عشتم أحراراً أهل فلسطين-محمد أنور السادات-عندما يكشف وجه المحجبة في أوروبا- عندما يزداد المسلمون والمسيحيون تدينا.</li>\r\n</ul>\r\n<h4 class=\"title\">عمرو صبحي صيدلي وكاتب وشاعر وناشط معلوماتي مصري</h4>\r\n<ul>\r\n<li>تخرجت من صيدلة طنطا ثم حصل على درجة الماجستير في السياسات العامة والإدارة من جامعة لندن</li>\r\n<li>هو كاتب وشاعر، وناشط معلوماتي مصري حائز على جائزة القمة العالمية للشباب وجائزة مصر لأدب الطفل عن اشتراكه في تأسيس منصّة مرسي ميتر ( منصة رقميّة مختصة بتوثيق ومراقبة آداء الرئيس المصري السابق) والتي نالت شهرة واهتمام عالمييّن.</li>\r\n</ul>\r\n<h4 class=\"title\">وفاء التلاوي كاتبة وداعية إسلامية</h4>\r\n<ul>\r\n<li>تخرج من كلية الآداب والتربية جامعة طنطا قسم لغة عربية ودين</li>\r\n<li>بعد 23 عاما ذاع صيتها ومقدرتها في الكتابة وأخذت الكثير من الجرائد الورقية والالكترونية بنشر مقالاتها الدينية والسياسية والاجتماعية.</li>\r\n</ul>', '<ul>\r\n<li>She graduated from Tanta Faculty of Science. She gained the PhD degree in 2002 from College of Geography at University of Southampton, UK.</li>\r\n<li>She is an Egyptian geologist specialized in geomorphology. She works in the field of applying Geographic Information Systems (GIS), remote sensing, using hydrological modeling in flood risk, and groundwater exploration in arid environments.</li>\r\n<li>She joined Boston University Center for Remote Sensing at the beginning of 2003.</li>\r\n</ul>\r\n<h4 class=\"title\">Dr. Ahmed Khaled Tawfik, Doctor, Author and Novelist</h4>\r\n<ul>\r\n<li>He joined Tanta Faculty of Medicine and gained the PhD degree in Tropical Medicine in 1997.</li>\r\n<li>Author and writer of novels such as &ldquo;Beyond Nature\" and \"Safari&rdquo;.</li>\r\n<li>He was the first Arab writer in the field of thrill literature. He was the most famous author in the field of youth literature, fantasy and science fiction, and was called the godfather.</li>\r\n</ul>\r\n<h4 class=\"title\">Dr. Nabil Farouk, Doctor and Author</h4>\r\n<ul>\r\n<li>He joined Tanta Faculty of Medicine and gained the Bachelor&rsquo;s degree in Medicine and Surgery in 1980.</li>\r\n<li>He was an Egyptian writer famous for police literature and science fiction. The most well-known of his writings were &ldquo;Future File&rdquo;, &ldquo;Impossibility Man&rdquo; and &ldquo;Cocktail 2000&rdquo;.</li>\r\n</ul>\r\n<h4 class=\"title\">Dr. Maged Al-Kamari, President of Kafr El-Sheikh University</h4>\r\n<ul>\r\n<li>He graduated from Tanta Faculty of Science, Department of Chemistry and Physics in 1981. He gained the PhD degree.</li>\r\n<li>He was appointed as a demonstrator at Faculty of Education, Tanta University, at Kafr El-Sheikh branch. He occupied higher positions till he gained the degree of Professor at the Faculty in 2004. He became dean of the Faculty in 2010. Finally, he became President of Kafr El-Sheikh University.</li>\r\n</ul>\r\n<h4 class=\"title\">Archbishop\\ Paula, Archbishop of Tanta and its Districts</h4>\r\n<ul>\r\n<li>He graduated from Tanta Faculty of Science, Department of Geology, with estimation of very good in 1974.&nbsp;</li>\r\n<li>He became Bishop of Tanta for Coptic Orthodox and Head of Australian branch of the Clerical Council and responsible official of political matters in the church.</li>\r\n<li>Lately he was promoted as Archbishop of the diocese of Tanta and its districts.</li>\r\n</ul>\r\n<h4 class=\"title\">Dr. Mahmoud Sakr, Head of the Academy of Scientific Research and Technology</h4>\r\n<ul>\r\n<li>He graduated from Tanta Faculty of Science, Department of Botany and gained the PhD degree.</li>\r\n<li>He occupied higher international positions till he assumed he chairmanship of the Academy of Scientific Research and Technology (ASRT) ,He won many scientific awards.</li>\r\n</ul>\r\n<h4 class=\"title\">Ghada \'Adel \'Aal, Novelist and Author</h4>\r\n<ul>\r\n<li>She graduated from Tanta Pharmacy and worked as a pharmacist. She launched her blog and wrote: &ldquo;I represent 15 million girls at the age of 25 to 35, who are urged by community every day to get married while it is not up to them that they are still single.\"</li>\r\n<li>She began her blog, &ldquo;I want to marry&rdquo; in August 2006. She published her first book and was translated to many languages. She has a regularly published article in Al-Shorouk newspaper since February 2009. She wrote for a lot of newspapers, journals, and electronic sites. .</li>\r\n</ul>\r\n<h4 class=\"title\">Mohammed Farouk Abo Farha, Journalist</h4>\r\n<ul>\r\n<li>He graduated from Faculty of Science at Tanta University.</li>\r\n<li>He has many literary and press articles. Examples of his writings are &ldquo;Freely Live, O Palestinians&rdquo;, &ldquo;Muhammad Anwar El-Sadat&rdquo;, &ldquo;When the Veiled Woman&rsquo;s Face is Uncovered in Europe&rdquo; and &ldquo;When Muslims and Christians become More Religious&rdquo;.</li>\r\n</ul>\r\n<h4 class=\"title\">Amro Sobhi, Pharmacist, Author and Egyptian Information Activist</h4>\r\n<ul>\r\n<li>He graduated from Tanta Faculty of Pharmacy. He gained the Master&rsquo;s degree in Public Policies and Administration from University of London.</li>\r\n<li>He is an author, poet and Egyptian information activist who won World Youth Summit Award and Egyptian Award of Children&rsquo;s Literature for his participation in forming Morsi Meter, a digital platform for documenting and monitoring the previous Egyptian president&rsquo;s performance, which was famous and gained international interest.</li>\r\n</ul>\r\n<h4 class=\"title\">Wafaa Al-Talawi, Author and Muslim Preacher</h4>\r\n<ul>\r\n<li>She graduated from Faculty of Arts and Education at Tanta University from Department of Arabic Language and Religion.</li>\r\n<li>23 years later she became famous and very brilliant writer. A lot of paper and electronic newspapers published her religious, political and social articles.</li>\r\n</ul>', 'upload/file_155839586010.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`) VALUES
(4, 'الجامعة', 'University'),
(5, 'ادارة الجامعة', 'University Managment');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`id`, `name_ar`, `name_en`, `link`) VALUES
(1, ' مركز تطوير الاداء الجامعى', 'University Performance Development Center ', 'http://www.tanta.edu.eg/UNITES/DEFAULT.HTM'),
(2, ' مركز تنمية قدرات أعضاء هيئة التدريس', 'Faculty and Leadership Development Center', 'http://tcifld.tanta.edu.eg/');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name_ar`, `name_en`, `file`) VALUES
(2, 'Company Name', '', 'upload/file_15556086975.png'),
(3, 'Company Name', '', 'upload/file_15559638906.gif'),
(4, 'Company Name', '', 'upload/file_155596391815.jpg'),
(5, 'Company Name', '', 'upload/file_155596395114.png'),
(6, 'Company Name', '', 'upload/file_15559639938.jpg'),
(7, 'Company Name', '', 'upload/file_15559640125.png'),
(8, 'Company Name', '', 'upload/file_155596402515.png');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `link` longtext NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name_ar`, `name_en`, `link`, `file`) VALUES
(1, 'كلية الزراعة', 'Agriculture College', 'http://agr.tanta.edu.eg/', 'upload/file_15576905828.jpg'),
(2, 'كلية العلوم', 'Scince College', 'http://sci.tanta.edu.eg/', 'upload/file_155769080913.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address_ar` longtext NOT NULL,
  `address_en` longtext NOT NULL,
  `fax` varchar(255) CHARACTER SET latin1 NOT NULL,
  `post` varchar(255) CHARACTER SET latin1 NOT NULL,
  `googlemap` longtext CHARACTER SET latin1 NOT NULL,
  `file` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address_ar`, `address_en`, `fax`, `post`, `googlemap`, `file`) VALUES
(6, '002 010 23 80 2442', 'm.yousef0082@gmail.com', 'طنطا - شارع الجيش - جمهورية مصر العربية', 'Al-Geish street - Tanta,Egypt', '3286114', '31111', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13709.153378417457!2d31.005081599999993!3d30.794547199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1517896729510\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'upload/file_15512108565.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(50) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `icon` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `title_ar`, `title_en`, `count`, `icon`) VALUES
(1, 'الموظفين', 'Employees', 23, 'fa fa-user-o'),
(3, 'الفروع', 'Branches', 40, 'fa fa-university');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `date`, `file`) VALUES
(1, ' طرح خطة مشروعات بحثية جديدة بجامعة طنطا', 'Presenting a Plan for New Research Projects by Tanta University', 'طرح خطة مشروعات بحثية جديدة ومبادرات مجتمعية ممولة من صندوق البحوث بجامعة طنطا &amp;nbsp;', 'Presenting a Plan for New Research Projects and Social Initiatives Funded by Tanta University Research Fund', '', 'upload/file_15588055546.jpg'),
(2, 'hfgh', 'gfgfd', 'fgfdg', 'gfgf', '', 'upload/file_15588055637.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gv_uni`
--

CREATE TABLE `gv_uni` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gv_uni`
--

INSERT INTO `gv_uni` (`id`, `name_ar`, `name_en`, `link`) VALUES
(1, 'جامعة القاهرة', 'Cairo University', 'https://cu.edu.eg/ar/Home'),
(3, 'جامعة الإسكندرية', 'Alexandria University', 'http://www.alexu.edu.eg/index.php/ar');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `counter_title` varchar(255) NOT NULL,
  `counter_desc` text NOT NULL,
  `photos_title` varchar(255) NOT NULL,
  `photos_desc` text NOT NULL,
  `skills_title` varchar(255) NOT NULL,
  `skills_desc` text NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_desc` text NOT NULL,
  `clients_title` varchar(255) NOT NULL,
  `clients_desc` text NOT NULL,
  `copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `counter_title`, `counter_desc`, `photos_title`, `photos_desc`, `skills_title`, `skills_desc`, `team_title`, `team_desc`, `clients_title`, `clients_desc`, `copyright`) VALUES
(1, 'Our ÙÙStatistics', 'let numbers take about us', 'Photos Galleryfgg', 'enjoy with our photo gallery', 'Our Skills', 'we have a heigh score in all skills', 'Team Work', 'strong team can do all you need', 'Our Parteners', 'become always support to us', '&copy; 2019 Company. All Rights Reserved.gfdg');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `title`, `description`, `icon`) VALUES
(1, 'here service name', 'some details about this service', 'fa fa-bar-chart'),
(3, 'here service name', 'some details about this service', 'fa fa-handshake-o'),
(4, 'here service name', 'some details about this service', 'fa fa-podcast');

-- --------------------------------------------------------

--
-- Table structure for table `importantlinks`
--

CREATE TABLE `importantlinks` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `importantlinks`
--

INSERT INTO `importantlinks` (`id`, `name_ar`, `name_en`, `link`, `file`) VALUES
(1, 'المجلس الأعلي للجامعات', 'Supreme Council of Universities', 'http://www.scu.eun.eg/', 'upload/file_155769354213.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `slogan_ar` longtext NOT NULL,
  `slogan_en` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `name_ar`, `name_en`, `slogan_ar`, `slogan_en`, `file`) VALUES
(1, 'جامعة طنطا', 'Tanta University', 'تساهم فى رسم مستقبل تعليمى أفضل وبناء عقول  مصرية مبدعة', 'Contribute to shaping a better educational future and building Egyptian creative minds', 'upload/file_155788116215.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_one` varchar(50) NOT NULL,
  `menu_two` varchar(50) NOT NULL,
  `menu_three` varchar(50) NOT NULL,
  `menu_four` varchar(50) NOT NULL,
  `menu_five` varchar(50) NOT NULL,
  `menu_six` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_one`, `menu_two`, `menu_three`, `menu_four`, `menu_five`, `menu_six`) VALUES
(8, 'home', 'about', 'services', 'gallery', 'team work', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_ar` text NOT NULL,
  `title_en` text NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `date` date NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `date`, `file`) VALUES
(1, 'جامعة طنطا تفوز ببطولة الجامعات المصرية للاسكواش', 'Tanta University Wins Squash Championship of Egyptian Universities', 'جامعة طنطا تحصد ذهبية بطولة الإسكواش فرق للجامعات المصرية صرح الدكتور الرفاعي مبارك نائب رئيس جامعة طنطا لشئون التعليم والطلاب بحصول الجامعة علي المركز الأول على مستوى الجامعات المصرية في مسابقة الاسكواش فرق، وفوزها بدرع البطولة التى أقيمت بالجامعة الأمريكية بالقاهرة يومي الخميس والجمعة الماضيين. وقد مثل فريق جامعة طنطا يوسف مصطفى شوقي وأحمد المشد وأحمد أيمن أبو العلا.? وتقدم الدكتور مجدي سبع رئيس جامعة طنطا، بخالص التهاني للطلاب الحاصلين على المراكز الثلاثة الأولى، موجّها الشكر للجامعات المشاركة في البطولة على مشاركتهم الفعالة.', 'Prof. Al-Refa&#039;i Mubarak, Tanta University Vice President for Education and Student Affairs, has declared that the University gained the first rank at the level of Egyptian universities in Team Squash Championship. The University won the shield of the Championship that was held at the American University in Cairo last Thursday and Friday. Tanta University team included Youssef Mustafa Shawki, Ahmed Al-Mashad and Ahmed Ayman Abo Al-&#039;Ela.\r\nProf. Magdi Sab&#039;, Tanta University President, congratulated the students who gained the top three ranks and thanked universities that took part in the Championship for their effective participation.', '2019-05-21', 'upload/file_15576809497.jpg'),
(6, 'نائب رئيس جامعة طنطا يفتتح الدورة الرمضانية للشطرنج', 'Dean of Faculty of Education in Tanta Inspects Second Term Exams', 'افتتح الدكتور الرفاعي مبارك ، نائب رئيس جامعة طنطا، مساء اليوم ، بطولة الشطرنج الرمضانية في دورتها الثانية والتى تقام تحت رعاية الدكتور مجدي سبع ، رئيس الجامعة ، بحضور &amp;nbsp;الدكتور مجدي وكوك منسق عام الأنشطة الطلابية بالجامعة وجمال حمزة مدير عام رعاية الطلاب &amp;nbsp;ومايسة رأفت مدير إدارة النشاط الاجتماعي.\r\nأكد نائب رئيس الجامعة على دعم الأنشطة الطلابية بكافة صورها وتشجيع الطلاب على تنمية مواهبهم الرياضية والفنية لان ذلك يمثل دورا أساسيا في صقل شخصياتهم وإعداد أجيال قادرة على الابتكار والإبداع في مختلف المجالات.\r\nمن جانبه ثمن الدكتور مجدي وكوك دعم قطاع التعليم والطلاب لكافة المجالات والأنشطة الرياضية والفنية والعلمية ، &amp;nbsp;مؤكدا على ضرورة الإهتمام بالأنشطة الطلابية إيمانا بدورها فى بناء شخصية الطالب الجامعى، وأكد على ضرورة التواجد مع الطلاب فى كافة الفاعليات والأنشطة المختلفة لما له من دور فى تعزيز ثقة الطالب وتنمية روح الولاء والانتماء فى الكلية والجامعة التى ينتمى اليها.&amp;nbsp;\r\nومن المقرر أن تقام البطولة على مدار 10 أيام بمقر الإدارة العامة لرعاية الطلاب بالمكتبة المركزية بالمجمع الطبي وبمشاركة أعضاء هيئة التدريس والعاملين والطلاب بالجامعة.\r\nيشار إلى أن المباريات يديرها تحكيميا الحكم الدولي ابراهيم الدسوقي.\r\n&amp;nbsp;', '\r\nProf. Samir Al-Khowait, Dean of Faculty of Education at Tanta University, inspected today rooms of second term exams. During the tour, he was accompanied by Prof. Abdel Hamid Al-Menshawi, Faculty Vice Dean for Education and Student Affairs; Prof. Mohammed Taha, Professor at Department of Educational Foundation; and Dr. Ehab Abdin, General Secretary of the Faculty. Prof. Al-Khowait asserted the necessity of including all levels of questions in exam sheet, giving students their right marks, dealing firmly with cheaters and providing all means of comfort to students in addition to attendance of professors of exam subjects to answer students&amp;rsquo; inquiries and to solve any unexpected problem that may occur during the exams.\r\n&amp;nbsp;\r\n\r\n&amp;nbsp;', '2019-05-21', 'upload/file_155841925413.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` longtext NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `file`) VALUES
(1, 'زؤيتنا', 'Our Vision', 'لدينا رؤية مستقبلية كبيرة', 'we are new company in technolog', 'upload/file_15561987829.png'),
(3, 'Trust Us', '', 'details about tnis page', '', 'upload/file_15562054439.jpg'),
(4, 'Our Mession', '', 'Detaols about this page', '', 'upload/file_155620877313.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `details_ar` longtext NOT NULL,
  `details_en` varchar(255) NOT NULL,
  `file` longtext NOT NULL,
  `filter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title_ar`, `title_en`, `details_ar`, `details_en`, `file`, `filter_id`) VALUES
(1, 'عنوان الصورة', 'first photo', '<p>وصف عن الصورة</p>', '<p>Details about this photo</p>', 'upload/file_155613161415.jpg', 4),
(3, 'الصورة الثانية', 'Second Image', '<p>ضصقيصثبثصيقثق</p>', '<p>الوصف</p>', 'upload/file_155614293612.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `photosfilter`
--

CREATE TABLE `photosfilter` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `name_en` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `photosfilter`
--

INSERT INTO `photosfilter` (`id`, `name_ar`, `name_en`) VALUES
(1, 'لقاءات', 'meetting'),
(2, 'رحلات', 'tours'),
(4, 'موظفين', 'employees');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skills_one_name` varchar(50) NOT NULL,
  `skills_one_perc` varchar(50) NOT NULL,
  `skills_two_name` varchar(50) NOT NULL,
  `skills_two_perc` varchar(50) NOT NULL,
  `skills_three_name` varchar(50) NOT NULL,
  `skills_three_perc` varchar(50) NOT NULL,
  `skills_four_name` varchar(50) NOT NULL,
  `skills_four_perc` varchar(50) NOT NULL,
  `skills_five_name` varchar(50) NOT NULL,
  `skills_five_perc` varchar(50) NOT NULL,
  `skills_six_name` varchar(50) NOT NULL,
  `skills_six_perc` varchar(50) NOT NULL,
  `skills_seven_name` varchar(50) NOT NULL,
  `skills_seven_perc` varchar(50) NOT NULL,
  `skills_eight_name` varchar(50) NOT NULL,
  `skills_eight_perc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills_one_name`, `skills_one_perc`, `skills_two_name`, `skills_two_perc`, `skills_three_name`, `skills_three_perc`, `skills_four_name`, `skills_four_perc`, `skills_five_name`, `skills_five_perc`, `skills_six_name`, `skills_six_perc`, `skills_seven_name`, `skills_seven_perc`, `skills_eight_name`, `skills_eight_perc`) VALUES
(0, 'Web Design', '80', 'Programmer', '70', 'Marketting', '90', 'Development', '85', 'html', '88', 'css', '65', 'javascript', '95', 'photoshop', '100');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_ar` text NOT NULL,
  `description_en` text NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `file`) VALUES
(1, 'جامعة طنطا ', 'Tanta University', 'عاصمة الدلتا العلمية ومصنع علماء المستقبل', 'The capital of the Scientific Delta and the Future Scientists Factory', 'upload/file_155915817210.JPG'),
(3, 'المدينة الجامعية لجامعة طنطا', 'University City of Tanta University', 'بيئة نموذجية ومناخ هادىء . . الملاذ الأمثل لكل طالب', 'Typical environment and calm climate. . The perfect refuge for every student', 'upload/file_155915921010.jpg'),
(4, 'جامعة طنطا ', 'Tanta University', 'عاصمة الدلتا العلمية ومصنع علماء المستقبل	', 'Typical environment and calm climate. . The perfect refuge for every student	', 'upload/file_15591593769.jpg'),
(5, 'كليات جامعة طنطا', 'Tanta University Colleges', 'اسرع طريق نحو مستقبل افضل', 'The speeder way to a better future', 'upload/file_15591596945.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(11) NOT NULL,
  `link` longtext NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `link`, `icon`) VALUES
(1, 'http://www.facebook.com', 'fa fa-facebook'),
(3, 'http://www.instagram.com', 'fa fa-linkedin'),
(4, 'http://www.twitter.com', 'fa fa-twitter'),
(5, 'http://www.youtube.com', 'fa fa-youtube'),
(6, 'http://www.google.com', 'fa fa-google-plus');

-- --------------------------------------------------------

--
-- Table structure for table `sp_uni`
--

CREATE TABLE `sp_uni` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_uni`
--

INSERT INTO `sp_uni` (`id`, `name_ar`, `name_en`, `link`) VALUES
(1, 'جامعة مصر الدولية', 'Misr International University (MIU)', 'http://www.miuegypt.edu.eg/'),
(2, ' جامعة مصر للعلوم والتكنولوجيا', ' Misr University for Science and Technology (MUST)', 'http://www.must.edu.eg/arabic/');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `job` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `job`, `file`) VALUES
(1, 'mohamed yousef', 'Web Designer', 'upload/file_155619534211.jpg'),
(3, 'Ahmed Adam', 'Programmer', 'upload/file_155619543912.jpg'),
(4, 'Kareem Ismail', 'Marketting Maneger', 'upload/file_15561961947.jpg'),
(5, 'Islam Ibrahim', 'General Maneger', 'upload/file_15561962958.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `file`) VALUES
(1, 'tu', '33', '09213113b6ce9a63b6b947d9b9075046e24ba941', 'upload/file_15574479208.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gv_uni`
--
ALTER TABLE `gv_uni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importantlinks`
--
ALTER TABLE `importantlinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photosfilter`
--
ALTER TABLE `photosfilter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_uni`
--
ALTER TABLE `sp_uni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gv_uni`
--
ALTER TABLE `gv_uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `importantlinks`
--
ALTER TABLE `importantlinks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photosfilter`
--
ALTER TABLE `photosfilter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sp_uni`
--
ALTER TABLE `sp_uni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
