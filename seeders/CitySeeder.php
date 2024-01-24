<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centers=array(
            array(1, 1, '15 مايو', '15 May'),
            array(2, 1, 'الازبكية', 'Al Azbakeyah'),
            array(3, 1, 'البساتين', 'Al Basatin'),
            array(4, 1, 'التبين', 'Tebin'),
            array(5, 1, 'الخليفة', 'El-Khalifa'),
            array(6, 1, 'الدراسة', 'El darrasa'),
            array(7, 1, 'الدرب الاحمر', 'Aldarb Alahmar'),
            array(8, 1, 'الزاوية الحمراء', 'Zawya al-Hamra'),
            array(9, 1, 'الزيتون', 'El-Zaytoun'),
            array(10, 1, 'الساحل', 'Sahel'),
            array(11, 1, 'السلام', 'El Salam'),
            array(12, 1, 'السيدة زينب', 'Sayeda Zeinab'),
            array(13, 1, 'الشرابية', 'El Sharabeya'),
            array(14, 1, 'مدينة الشروق', 'Shorouk'),
            array(15, 1, 'الظاهر', 'El Daher'),
            array(16, 1, 'العتبة', 'Ataba'),
            array(17, 1, 'القاهرة الجديدة', 'New Cairo'),
            array(18, 1, 'المرج', 'El Marg'),
            array(19, 1, 'عزبة النخل', 'Ezbet el Nakhl'),
            array(20, 1, 'المطرية', 'Matareya'),
            array(21, 1, 'المعادى', 'Maadi'),
            array(22, 1, 'المعصرة', 'Maasara'),
            array(23, 1, 'المقطم', 'Mokattam'),
            array(24, 1, 'المنيل', 'Manyal'),
            array(25, 1, 'الموسكى', 'Mosky'),
            array(26, 1, 'النزهة', 'Nozha'),
            array(27, 1, 'الوايلى', 'Waily'),
            array(28, 1, 'باب الشعرية', 'Bab al-Shereia'),
            array(29, 1, 'بولاق', 'Bolaq'),
            array(30, 1, 'جاردن سيتى', 'Garden City'),
            array(31, 1, 'حدائق القبة', 'Hadayek El-Kobba'),
            array(32, 1, 'حلوان', 'Helwan'),
            array(33, 1, 'دار السلام', 'Dar Al Salam'),
            array(34, 1, 'شبرا', 'Shubra'),
            array(35, 1, 'طره', 'Tura'),
            array(36, 1, 'عابدين', 'Abdeen'),
            array(37, 1, 'عباسية', 'Abaseya'),
            array(38, 1, 'عين شمس', 'Ain Shams'),
            array(39, 1, 'مدينة نصر', 'Nasr City'),
            array(40, 1, 'مصر الجديدة', 'New Heliopolis'),
            array(41, 1, 'مصر القديمة', 'Masr Al Qadima'),
            array(42, 1, 'منشية ناصر', 'Mansheya Nasir'),
            array(43, 1, 'مدينة بدر', 'Badr City'),
            array(44, 1, 'مدينة العبور', 'Obour City'),
            array(45, 1, 'وسط البلد', 'Cairo Downtown'),
            array(46, 1, 'الزمالك', 'Zamalek'),
            array(47, 1, 'قصر النيل', 'Kasr El Nile'),
            array(48, 1, 'الرحاب', 'Rehab'),
            array(49, 1, 'القطامية', 'Katameya'),
            array(50, 1, 'مدينتي', 'Madinty'),
            array(51, 1, 'روض الفرج', 'Rod Alfarag'),
            array(52, 1, 'شيراتون', 'Sheraton'),
            array(53, 1, 'الجمالية', 'El-Gamaleya'),
            array(54, 1, 'العاشر من رمضان', '10th of Ramadan City'),
            array(55, 1, 'الحلمية', 'Helmeyat Alzaytoun'),
            array(56, 1, 'النزهة الجديدة', 'New Nozha'),
            array(57, 1, 'العاصمة الإدارية', 'Capital New'),
            array(58, 2, 'الجيزة', 'Giza'),
            array(59, 2, 'السادس من أكتوبر', 'Sixth of October'),
            array(60, 2, 'الشيخ زايد', 'Cheikh Zayed'),
            array(61, 2, 'الحوامدية', 'Hawamdiyah'),
            array(62, 2, 'البدرشين', 'Al Badrasheen'),
            array(63, 2, 'الصف', 'Saf'),
            array(64, 2, 'أطفيح', 'Atfih'),
            array(65, 2, 'العياط', 'Al Ayat'),
            array(66, 2, 'الباويطي', 'Al-Bawaiti'),
            array(67, 2, 'منشأة القناطر', 'ManshiyetAl Qanater'),
            array(68, 2, 'أوسيم', 'Oaseem'),
            array(69, 2, 'كرداسة', 'Kerdasa'),
            array(70, 2, 'أبو النمرس', 'Abu Nomros'),
            array(71, 2, 'كفر غطاطي', 'Kafr Ghati'),
            array(72, 2, 'منشأة البكاري', 'Manshiyet Al Bakari'),
            array(73, 2, 'الدقى', 'Dokki'),
            array(74, 2, 'العجوزة', 'Agouza'),
            array(75, 2, 'الهرم', 'Haram'),
            array(76, 2, 'الوراق', 'Warraq'),
            array(77, 2, 'امبابة', 'Imbaba'),
            array(78, 2, 'بولاق الدكرور', 'Boulaq Dakrour'),
            array(79, 2, 'الواحات البحرية', 'Al Wahat Al Baharia'),
            array(80, 2, 'العمرانية', 'Omraneya'),
            array(81, 2, 'المنيب', 'Moneeb'),
            array(82, 2, 'بين السرايات', 'Bin Alsarayat'),
            array(83, 2, 'الكيت كات', 'Kit Kat'),
            array(84, 2, 'المهندسين', 'Mohandessin'),
            array(85, 2, 'فيصل', 'Faisal'),
            array(86, 2, 'أبو رواش', 'Abu Rawash'),
            array(87, 2, 'حدائق الأهرام', 'Hadayek Alahram'),
            array(88, 2, 'الحرانية', 'Haraneya'),
            array(89, 2, 'حدائق اكتوبر', 'Hadayek October'),
            array(90, 2, 'صفط اللبن', 'Saft Allaban'),
            array(91, 2, 'القرية الذكية', 'Smart Village'),
            array(92, 2, 'ارض اللواء', 'Ard Ellwaa'),
            array(93, 3, 'ابو قير', 'Abu Qir'),
            array(94, 3, 'الابراهيمية', 'Al Ibrahimeyah'),
            array(95, 3, 'الأزاريطة', 'Azarita'),
            array(96, 3, 'الانفوشى', 'Anfoushi'),
            array(97, 3, 'الدخيلة', 'Dekheila'),
            array(98, 3, 'السيوف', 'El Soyof'),
            array(99, 3, 'العامرية', 'Ameria'),
            array(100, 3, 'اللبان', 'El Labban'),
            array(101, 3, 'المفروزة', 'Al Mafrouza'),
            array(102, 3, 'المنتزه', 'El Montaza'),
            array(103, 3, 'المنشية', 'Mansheya'),
            array(104, 3, 'الناصرية', 'Naseria'),
            array(105, 3, 'امبروزو', 'Ambrozo'),
            array(106, 3, 'باب شرق', 'Bab Sharq'),
            array(107, 3, 'برج العرب', 'Bourj Alarab'),
            array(108, 3, 'ستانلى', 'Stanley'),
            array(109, 3, 'سموحة', 'Smouha'),
            array(110, 3, 'سيدى بشر', 'Sidi Bishr'),
            array(111, 3, 'شدس', 'Shads'),
            array(112, 3, 'غيط العنب', 'Gheet Alenab'),
            array(113, 3, 'فلمينج', 'Fleming'),
            array(114, 3, 'فيكتوريا', 'Victoria'),
            array(115, 3, 'كامب شيزار', 'Camp Shizar'),
            array(116, 3, 'كرموز', 'Karmooz'),
            array(117, 3, 'محطة الرمل', 'Mahta Alraml'),
            array(118, 3, 'مينا البصل', 'Mina El-Basal'),
            array(119, 3, 'العصافرة', 'Asafra'),
            array(120, 3, 'العجمي', 'Agamy'),
            array(121, 3, 'بكوس', 'Bakos'),
            array(122, 3, 'بولكلي', 'Boulkly'),
            array(123, 3, 'كليوباترا', 'Cleopatra'),
            array(124, 3, 'جليم', 'Glim'),
            array(125, 3, 'المعمورة', 'Al Mamurah'),
            array(126, 3, 'المندرة', 'Al Mandara'),
            array(127, 3, 'محرم بك', 'Moharam Bek'),
            array(128, 3, 'الشاطبي', 'Elshatby'),
            array(129, 3, 'سيدي جابر', 'Sidi Gaber'),
            array(130, 3, 'الساحل الشمالي', 'North Coast/sahel'),
            array(131, 3, 'الحضرة', 'Alhadra'),
            array(132, 3, 'العطارين', 'Alattarin'),
            array(133, 3, 'سيدي كرير', 'Sidi Kerir'),
            array(134, 3, 'الجمرك', 'Elgomrok'),
            array(135, 3, 'المكس', 'Al Max'),
            array(136, 3, 'مارينا', 'Marina'),
            array(137, 4, 'المنصورة', 'Mansoura'),
            array(138, 4, 'طلخا', 'Talkha'),
            array(139, 4, 'ميت غمر', 'Mitt Ghamr'),
            array(140, 4, 'دكرنس', 'Dekernes'),
            array(141, 4, 'أجا', 'Aga'),
            array(142, 4, 'منية النصر', 'Menia El Nasr'),
            array(143, 4, 'السنبلاوين', 'Sinbillawin'),
            array(144, 4, 'الكردي', 'El Kurdi'),
            array(145, 4, 'بني عبيد', 'Bani Ubaid'),
            array(146, 4, 'المنزلة', 'Al Manzala'),
            array(147, 4, 'تمي الأمديد', 'tami al\'amdid'),
            array(148, 4, 'الجمالية', 'aljamalia'),
            array(149, 4, 'شربين', 'Sherbin'),
            array(150, 4, 'المطرية', 'Mataria'),
            array(151, 4, 'بلقاس', 'Belqas'),
            array(152, 4, 'ميت سلسيل', 'Meet Salsil'),
            array(153, 4, 'جمصة', 'Gamasa'),
            array(154, 4, 'محلة دمنة', 'Mahalat Damana'),
            array(155, 4, 'نبروه', 'Nabroh'),
            array(156, 5, 'الغردقة', 'Hurghada'),
            array(157, 5, 'رأس غارب', 'Ras Ghareb'),
            array(158, 5, 'سفاجا', 'Safaga'),
            array(159, 5, 'القصير', 'El Qusiar'),
            array(160, 5, 'مرسى علم', 'Marsa Alam'),
            array(161, 5, 'الشلاتين', 'Shalatin'),
            array(162, 5, 'حلايب', 'Halaib'),
            array(163, 5, 'الدهار', 'Aldahar'),
            array(164, 6, 'دمنهور', 'Damanhour'),
            array(165, 6, 'كفر الدوار', 'Kafr El Dawar'),
            array(166, 6, 'رشيد', 'Rashid'),
            array(167, 6, 'إدكو', 'Edco'),
            array(168, 6, 'أبو المطامير', 'Abu al-Matamir'),
            array(169, 6, 'أبو حمص', 'Abu Homs'),
            array(170, 6, 'الدلنجات', 'Delengat'),
            array(171, 6, 'المحمودية', 'Mahmoudiyah'),
            array(172, 6, 'الرحمانية', 'Rahmaniyah'),
            array(173, 6, 'إيتاي البارود', 'Itai Baroud'),
            array(174, 6, 'حوش عيسى', 'Housh Eissa'),
            array(175, 6, 'شبراخيت', 'Shubrakhit'),
            array(176, 6, 'كوم حمادة', 'Kom Hamada'),
            array(177, 6, 'بدر', 'Badr'),
            array(178, 6, 'وادي النطرون', 'Wadi Natrun'),
            array(179, 6, 'النوبارية الجديدة', 'New Nubaria'),
            array(180, 6, 'النوبارية', 'Alnoubareya'),
            array(181, 7, 'الفيوم', 'Fayoum'),
            array(182, 7, 'الفيوم الجديدة', 'Fayoum El Gedida'),
            array(183, 7, 'طامية', 'Tamiya'),
            array(184, 7, 'سنورس', 'Snores'),
            array(185, 7, 'إطسا', 'Etsa'),
            array(186, 7, 'إبشواي', 'Epschway'),
            array(187, 7, 'يوسف الصديق', 'Yusuf El Sediaq'),
            array(188, 7, 'الحادقة', 'Hadqa'),
            array(189, 7, 'اطسا', 'Atsa'),
            array(190, 7, 'الجامعة', 'Algamaa'),
            array(191, 7, 'السيالة', 'Sayala'),
            array(192, 8, 'طنطا', 'Tanta'),
            array(193, 8, 'المحلة الكبرى', 'Al Mahalla Al Kobra'),
            array(194, 8, 'كفر الزيات', 'Kafr El Zayat'),
            array(195, 8, 'زفتى', 'Zefta'),
            array(196, 8, 'السنطة', 'El Santa'),
            array(197, 8, 'قطور', 'Qutour'),
            array(198, 8, 'بسيون', 'Basion'),
            array(199, 8, 'سمنود', 'Samannoud'),
            array(200, 9, 'الإسماعيلية', 'Ismailia'),
            array(201, 9, 'فايد', 'Fayed'),
            array(202, 9, 'القنطرة شرق', 'Qantara Sharq'),
            array(203, 9, 'القنطرة غرب', 'Qantara Gharb'),
            array(204, 9, 'التل الكبير', 'El Tal El Kabier'),
            array(205, 9, 'أبو صوير', 'Abu Sawir'),
            array(206, 9, 'القصاصين الجديدة', 'Kasasien El Gedida'),
            array(207, 9, 'نفيشة', 'Nefesha'),
            array(208, 9, 'الشيخ زايد', 'Sheikh Zayed'),
            array(209, 10, 'شبين الكوم', 'Shbeen El Koom'),
            array(210, 10, 'مدينة السادات', 'Sadat City'),
            array(211, 10, 'منوف', 'Menouf'),
            array(212, 10, 'سرس الليان', 'Sars El-Layan'),
            array(213, 10, 'أشمون', 'Ashmon'),
            array(214, 10, 'الباجور', 'Al Bagor'),
            array(215, 10, 'قويسنا', 'Quesna'),
            array(216, 10, 'بركة السبع', 'Berkat El Saba'),
            array(217, 10, 'تلا', 'Tala'),
            array(218, 10, 'الشهداء', 'Al Shohada'),
            array(219, 11, 'المنيا', 'Minya'),
            array(220, 11, 'المنيا الجديدة', 'Minya El Gedida'),
            array(221, 11, 'العدوة', 'El Adwa'),
            array(222, 11, 'مغاغة', 'Magagha'),
            array(223, 11, 'بني مزار', 'Bani Mazar'),
            array(224, 11, 'مطاي', 'Mattay'),
            array(225, 11, 'سمالوط', 'Samalut'),
            array(226, 11, 'المدينة الفكرية', 'Madinat El Fekria'),
            array(227, 11, 'ملوي', 'Meloy'),
            array(228, 11, 'دير مواس', 'Deir Mawas'),
            array(229, 11, 'ابو قرقاص', 'Abu Qurqas'),
            array(230, 11, 'ارض سلطان', 'Ard Sultan'),
            array(231, 12, 'بنها', 'Banha'),
            array(232, 12, 'قليوب', 'Qalyub'),
            array(233, 12, 'شبرا الخيمة', 'Shubra Al Khaimah'),
            array(234, 12, 'القناطر الخيرية', 'Al Qanater Charity'),
            array(235, 12, 'الخانكة', 'Khanka'),
            array(236, 12, 'كفر شكر', 'Kafr Shukr'),
            array(237, 12, 'طوخ', 'Tukh'),
            array(238, 12, 'قها', 'Qaha'),
            array(239, 12, 'العبور', 'Obour'),
            array(240, 12, 'الخصوص', 'Khosous'),
            array(241, 12, 'شبين القناطر', 'Shibin Al Qanater'),
            array(242, 12, 'مسطرد', 'Mostorod'),
            array(243, 13, 'الخارجة', 'El Kharga'),
            array(244, 13, 'باريس', 'Paris'),
            array(245, 13, 'موط', 'Mout'),
            array(246, 13, 'الفرافرة', 'Farafra'),
            array(247, 13, 'بلاط', 'Balat'),
            array(248, 13, 'الداخلة', 'Dakhla'),
            array(249, 14, 'السويس', 'Suez'),
            array(250, 14, 'الجناين', 'Alganayen'),
            array(251, 14, 'عتاقة', 'Ataqah'),
            array(252, 14, 'العين السخنة', 'Ain Sokhna'),
            array(253, 14, 'فيصل', 'Faysal'),
            array(254, 15, 'أسوان', 'Aswan'),
            array(255, 15, 'أسوان الجديدة', 'Aswan El Gedida'),
            array(256, 15, 'دراو', 'Drau'),
            array(257, 15, 'كوم أمبو', 'Kom Ombo'),
            array(258, 15, 'نصر النوبة', 'Nasr Al Nuba'),
            array(259, 15, 'كلابشة', 'Kalabsha'),
            array(260, 15, 'إدفو', 'Edfu'),
            array(261, 15, 'الرديسية', 'Al-Radisiyah'),
            array(262, 15, 'البصيلية', 'Al Basilia'),
            array(263, 15, 'السباعية', 'Al Sibaeia'),
            array(264, 15, 'ابوسمبل السياحية', 'Abo Simbl Al Siyahia'),
            array(265, 15, 'مرسى علم', 'Marsa Alam'),
            array(266, 16, 'أسيوط', 'Assiut'),
            array(267, 16, 'أسيوط الجديدة', 'Assiut El Gedida'),
            array(268, 16, 'ديروط', 'Dayrout'),
            array(269, 16, 'منفلوط', 'Manfalut'),
            array(270, 16, 'القوصية', 'Qusiya'),
            array(271, 16, 'أبنوب', 'Abnoub'),
            array(272, 16, 'أبو تيج', 'Abu Tig'),
            array(273, 16, 'الغنايم', 'El Ghanaim'),
            array(274, 16, 'ساحل سليم', 'Sahel Selim'),
            array(275, 16, 'البداري', 'El Badari'),
            array(276, 16, 'صدفا', 'Sidfa'),
            array(277, 17, 'بني سويف', 'Bani Sweif'),
            array(278, 17, 'بني سويف الجديدة', 'Beni Suef El Gedida'),
            array(279, 17, 'الواسطى', 'Al Wasta'),
            array(280, 17, 'ناصر', 'Naser'),
            array(281, 17, 'إهناسيا', 'Ehnasia'),
            array(282, 17, 'ببا', 'beba'),
            array(283, 17, 'الفشن', 'Fashn'),
            array(284, 17, 'سمسطا', 'Somasta'),
            array(285, 17, 'الاباصيرى', 'Alabbaseri'),
            array(286, 17, 'مقبل', 'Mokbel'),
            array(287, 18, 'بورسعيد', 'PorSaid'),
            array(288, 18, 'بورفؤاد', 'Port Fouad'),
            array(289, 18, 'العرب', 'Alarab'),
            array(290, 18, 'حى الزهور', 'Zohour'),
            array(291, 18, 'حى الشرق', 'Alsharq'),
            array(292, 18, 'حى الضواحى', 'Aldawahi'),
            array(293, 18, 'حى المناخ', 'Almanakh'),
            array(294, 18, 'حى مبارك', 'Mubarak'),
            array(295, 19, 'دمياط', 'Damietta'),
            array(296, 19, 'دمياط الجديدة', 'New Damietta'),
            array(297, 19, 'رأس البر', 'Ras El Bar'),
            array(298, 19, 'فارسكور', 'Faraskour'),
            array(299, 19, 'الزرقا', 'Zarqa'),
            array(300, 19, 'السرو', 'alsaru'),
            array(301, 19, 'الروضة', 'alruwda'),
            array(302, 19, 'كفر البطيخ', 'Kafr El-Batikh'),
            array(303, 19, 'عزبة البرج', 'Azbet Al Burg'),
            array(304, 19, 'ميت أبو غالب', 'Meet Abou Ghalib'),
            array(305, 19, 'كفر سعد', 'Kafr Saad'),
            array(306, 20, 'الزقازيق', 'Zagazig'),
            array(307, 20, 'العاشر من رمضان', 'Al Ashr Men Ramadan'),
            array(308, 20, 'منيا القمح', 'Minya Al Qamh'),
            array(309, 20, 'بلبيس', 'Belbeis'),
            array(310, 20, 'مشتول السوق', 'Mashtoul El Souq'),
            array(311, 20, 'القنايات', 'Qenaiat'),
            array(312, 20, 'أبو حماد', 'Abu Hammad'),
            array(313, 20, 'القرين', 'El Qurain'),
            array(314, 20, 'ههيا', 'Hehia'),
            array(315, 20, 'أبو كبير', 'Abu Kabir'),
            array(316, 20, 'فاقوس', 'Faccus'),
            array(317, 20, 'الصالحية الجديدة', 'El Salihia El Gedida'),
            array(318, 20, 'الإبراهيمية', 'Al Ibrahimiyah'),
            array(319, 20, 'ديرب نجم', 'Deirb Negm'),
            array(320, 20, 'كفر صقر', 'Kafr Saqr'),
            array(321, 20, 'أولاد صقر', 'Awlad Saqr'),
            array(322, 20, 'الحسينية', 'Husseiniya'),
            array(323, 20, 'صان الحجر القبلية', 'san alhajar alqablia'),
            array(324, 20, 'منشأة أبو عمر', 'Manshayat Abu Omar'),
            array(325, 21, 'الطور', 'Al Toor'),
            array(326, 21, 'شرم الشيخ', 'Sharm El-Shaikh'),
            array(327, 21, 'دهب', 'Dahab'),
            array(328, 21, 'نويبع', 'Nuweiba'),
            array(329, 21, 'طابا', 'Taba'),
            array(330, 21, 'سانت كاترين', 'Saint Catherine'),
            array(331, 21, 'أبو رديس', 'Abu Redis'),
            array(332, 21, 'أبو زنيمة', 'Abu Zenaima'),
            array(333, 21, 'رأس سدر', 'Ras Sidr'),
            array(334, 22, 'كفر الشيخ', 'Kafr El Sheikh'),
            array(335, 22, 'وسط البلد كفر الشيخ', 'Kafr El Sheikh Downtown'),
            array(336, 22, 'دسوق', 'Desouq'),
            array(337, 22, 'فوه', 'Fooh'),
            array(338, 22, 'مطوبس', 'Metobas'),
            array(339, 22, 'برج البرلس', 'Burg Al Burullus'),
            array(340, 22, 'بلطيم', 'Baltim'),
            array(341, 22, 'مصيف بلطيم', 'Masief Baltim'),
            array(342, 22, 'الحامول', 'Hamol'),
            array(343, 22, 'بيلا', 'Bella'),
            array(344, 22, 'الرياض', 'Riyadh'),
            array(345, 22, 'سيدي سالم', 'Sidi Salm'),
            array(346, 22, 'قلين', 'Qellen'),
            array(347, 22, 'سيدي غازي', 'Sidi Ghazi'),
            array(348, 23, 'مرسى مطروح', 'Marsa Matrouh'),
            array(349, 23, 'الحمام', 'El Hamam'),
            array(350, 23, 'العلمين', 'Alamein'),
            array(351, 23, 'الضبعة', 'Dabaa'),
            array(352, 23, 'النجيلة', 'Al-Nagila'),
            array(353, 23, 'سيدي براني', 'Sidi Brani'),
            array(354, 23, 'السلوم', 'Salloum'),
            array(355, 23, 'سيوة', 'Siwa'),
            array(356, 23, 'مارينا', 'Marina'),
            array(357, 23, 'الساحل الشمالى', 'North Coast'),
            array(358, 24, 'الأقصر', 'Luxor'),
            array(359, 24, 'الأقصر الجديدة', 'New Luxor'),
            array(360, 24, 'إسنا', 'Esna'),
            array(361, 24, 'طيبة الجديدة', 'New Tiba'),
            array(362, 24, 'الزينية', 'Al ziynia'),
            array(363, 24, 'البياضية', 'Al Bayadieh'),
            array(364, 24, 'القرنة', 'Al Qarna'),
            array(365, 24, 'أرمنت', 'Armant'),
            array(366, 24, 'الطود', 'Al Tud'),
            array(367, 25, 'قنا', 'Qena'),
            array(368, 25, 'قنا الجديدة', 'New Qena'),
            array(369, 25, 'ابو طشت', 'Abu Tesht'),
            array(370, 25, 'نجع حمادي', 'Nag Hammadi'),
            array(371, 25, 'دشنا', 'Deshna'),
            array(372, 25, 'الوقف', 'Alwaqf'),
            array(373, 25, 'قفط', 'Qaft'),
            array(374, 25, 'نقادة', 'Naqada'),
            array(375, 25, 'فرشوط', 'Farshout'),
            array(376, 25, 'قوص', 'Quos'),
            array(377, 26, 'العريش', 'Arish'),
            array(378, 26, 'الشيخ زويد', 'Sheikh Zowaid'),
            array(379, 26, 'نخل', 'Nakhl'),
            array(380, 26, 'رفح', 'Rafah'),
            array(381, 26, 'بئر العبد', 'Bir al-Abed'),
            array(382, 26, 'الحسنة', 'Al Hasana'),
            array(383, 27, 'سوهاج', 'Sohag'),
            array(384, 27, 'سوهاج الجديدة', 'Sohag El Gedida'),
            array(385, 27, 'أخميم', 'Akhmeem'),
            array(386, 27, 'أخميم الجديدة', 'Akhmim El Gedida'),
            array(387, 27, 'البلينا', 'Albalina'),
            array(388, 27, 'المراغة', 'El Maragha'),
            array(389, 27, 'المنشأة', 'almunsha\'a'),
            array(390, 27, 'دار السلام', 'Dar AISalaam'),
            array(391, 27, 'جرجا', 'Gerga'),
            array(392, 27, 'جهينة الغربية', 'Jahina Al Gharbia'),
            array(393, 27, 'ساقلته', 'Saqilatuh'),
            array(394, 27, 'طما', 'Tama'),
            array(395, 27, 'طهطا', 'Tahta'),
            array(396, 27, 'الكوثر', 'Alkawthar')
        );

        foreach($centers as $center){
            DB::table("cities")->insert([
                "id" => $center[0],
                "governorate_id" => $center[1],
                "city_name_ar" => $center[2],
                "city_name_en" => $center[3]
            ]);
        }
    }
}