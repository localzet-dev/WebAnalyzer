<?php

namespace Triangle\WebAnalyzer\Data;

use Triangle\WebAnalyzer\Constants\DeviceType;

DeviceModels::$WM_MODELS = [
    'DX900' => ['Acer', 'Tempo DX900'],
    'E100' => ['Acer', 'beTouch E100'],
    'F900' => ['Acer', 'Tempo F900'],
    'S200' => ['Acer', 'neoTouch S200'],
    'P400' => ['Acer', 'neoTouch P400'],
    '-GalaxyII' => ['Asus', 'Galaxy II'],
    '-GalaxyMini' => ['Asus', 'Galaxy Mini'],
    'M530w!' => ['Asus', 'M530w'],
    'M930!' => ['Asus', 'M930'],
    '-P525!' => ['Asus', 'P525'],
    '-P526!' => ['Asus', 'P526'],
    '-P527!' => ['Asus', 'P527'],
    'P550' => ['Asus', 'P550'],
    '-P552w!' => ['Asus', 'P552w'],
    '-P552!' => ['Asus', 'P552'],
    '-P565!' => ['Asus', 'P565'],
    '-P735!' => ['Asus', 'P735'],
    'P750' => ['Asus', 'P750'],
    'Bird T900' => ['Bird', 'T900'],
    'Coolpad F800' => ['Coolpad', 'F800'],
    'Datalogic Memor' => ['Datalogic', 'Memor'],
    'Dopod838Pro' => ['Dopod', '838 Pro'],
    'CHT 9100!' => ['Dopod', 'CHT 9100'],
    'DopodD810' => ['Dopod', 'D810'],
    'dopod-S900c' => ['Dopod', 'S900'],
    'T5388' => ['Dopod', 'T5388'],
    'dopodT5588' => ['Dopod', 'T5588'],
    'dopodT8388' => ['Dopod', 'T8388'],
    'dopodT8588' => ['Dopod', 'T8588'],
    'garmin-asus-Nuvifone-M10' => ['Garmin-Asus', 'Nuvifone M10'],
    'Nuvifone-M10' => ['Garmin-Asus', 'Nuvifone M10'],
    'Nuvifone-M20' => ['Garmin-Asus', 'Nuvifone M20'],
    'GIGABYTE-MS800' => ['Gigabyte', 'GSmart MS800'],
    'HP iPAQ 510' => ['HP', 'iPAQ 510'],
    'HPiPAQ510!' => ['HP', 'iPAQ 510'],
    'HPiPAQ610' => ['HP', 'iPAQ 610'],
    'HPiPAQ910!' => ['HP', 'iPAQ 910'],
    'HP iPAQ h6300' => ['HP', 'iPAQ h6300'],
    'HP iPAQ hw6500!' => ['HP', 'iPAQ hw6500'],
    'HPiPAQhw6900!' => ['HP', 'iPAQ hw6900'],
    'HPiPAQrw6800!' => ['HP', 'iPAQ rw6800'],
    'HPiPAQrw6815!' => ['HP', 'iPAQ rw6815'],
    'HPiPAQDataMessenger!' => ['HP', 'iPAQ Data Messenger'],
    'HPiPAQVoiceMessenger!' => ['HP', 'iPAQ Voice Messenger'],
    'HPiPAQGlisten' => ['HP', 'iPAQ Glisten'],
    'HP KB1' => ['HP', 'iPAQ Glisten'],
    'HTC8500' => ['HTC', '8500'],
    'HTC P3300' => ['HTC', 'P3300'],
    'HTC love' => ['HTC', 'P3350'],
    'HTC P3350' => ['HTC', 'P3350'],
    'HTC P3400!' => ['HTC', 'P3400'],
    'HTC P3450!' => ['HTC', 'P3450'],
    'P4350!' => ['HTC', 'P3450'],
    'HTC HERALD' => ['HTC', 'P3450'],
    'HTC P6300' => ['HTC', 'P6300'],
    'HTC P6500' => ['HTC', 'P6500'],
    'HTC X7500' => ['HTC', 'Advantage'],
    'HTC X7510' => ['HTC', 'Advantage'],
    '(HTC )?HD mini!' => ['HTC', 'HD mini'],
    '.*T5555!' => ['HTC', 'HD mini'],
    '(HTC )?HD2!' => ['HTC', 'HD2'],
    '.*T8585!' => ['HTC', 'HD2'],
    'HTC T8290' => ['HTC', 'MAX 4G'],
    'HTC MAX 4G' => ['HTC', 'MAX 4G'],
    'HTC MTeoR' => ['HTC', 'MTeoR'],
    'P3470!' => ['HTC', 'Pharos'],
    'HTC Prophet' => ['HTC', 'Prophet'],
    'HTC Snap!' => ['HTC', 'S511 Snap'],
    '.*S521!' => ['HTC', 'S511 Snap'],
    'HTC Maple S520' => ['HTC', 'S520 Maple'],
    'HTC S620!' => ['HTC', 'S620 Excalibur'],
    'HTC Excalibur' => ['HTC', 'S620 Excalibur'],
    'HTC S630' => ['HTC', 'S630 Cavelier'],
    'HTC S710' => ['HTC', 'S710 Vox'],
    'HTC S730' => ['HTC', 'S730 Wings'],
    'HTC S740' => ['HTC', 'S740 Rose'],
    'HTC Touch' => ['HTC', 'Touch'],
    'HTC Elf' => ['HTC', 'Touch'],
    'HTC 6900' => ['HTC', 'Touch'],
    'HTC6900' => ['HTC', 'Touch'],
    'HTC6900-MR1' => ['HTC', 'Touch'],
    'P3450' => ['HTC', 'Touch'],
    'HTC TouchDual' => ['HTC', 'Touch'],
    'HTC Touch 3G!' => ['HTC', 'Touch 3G'],
    'HTC Jade' => ['HTC', 'Touch 3G'],
    'HTC Mega!' => ['HTC', 'Touch 2'],
    'HTC Touch2!' => ['HTC', 'Touch 2'],
    '.*T33(20|33|35)!' => ['HTC', 'Touch 2'],
    'P3650' => ['HTC', 'Touch Cruise'],
    'P3650t' => ['HTC', 'Touch Cruise'],
    'HTC Touch Cruise!' => ['HTC', 'Touch Cruise'],
    'HTC P3650' => ['HTC', 'Touch Cruise'],
    'HTC P3651' => ['HTC', 'Touch Cruise'],
    'HTC Polaris' => ['HTC', 'Touch Cruise'],
    'HTC Touch Diamond2!' => ['HTC', 'Touch Diamond 2'],
    '.*T5353!' => ['HTC', 'Touch Diamond 2'],
    'HTC Touch Diamond!' => ['HTC', 'Touch Diamond'],
    '.*P3700!' => ['HTC', 'Touch Diamond'],
    'HTC Diamond' => ['HTC', 'Touch Diamond'],
    'HTC P3701' => ['HTC', 'Touch Diamond'],
    'HTC P5500' => ['HTC', 'Touch Dual'],
    'HTC P5310!' => ['HTC', 'Touch Dual'],
    'HTC Touch HD2!' => ['HTC', 'Touch HD2'],
    '.*T8585!' => ['HTC', 'Touch HD2'],
    'HTC Touch HD!' => ['HTC', 'Touch HD'],
    '.*T82(82|83)!' => ['HTC', 'Touch HD'],
    'HTC Touch Pro2!' => ['HTC', 'Touch Pro 2'],
    '.*T73(73|80)!' => ['HTC', 'Touch Pro 2'],
    'HTC Touch Pro!' => ['HTC', 'Touch Pro'],
    '.*T7272!' => ['HTC', 'Touch Pro'],
    'HTC P4600' => ['HTC', 'Touch Pro'],
    'HTC Raphael' => ['HTC', 'Touch Pro'],
    'HTC Touch Viva!' => ['HTC', 'Touch Viva'],
    '.*T2223!' => ['HTC', 'Touch Viva'],
    'P3600!' => ['HTC', 'Trinity'],
    'HTC Trinity' => ['HTC', 'Trinity'],
    'HTC P3600' => ['HTC', 'Trinity'],
    'HTC P3600i' => ['HTC', 'Trinity'],
    'HTC v3600' => ['HTC', 'Trinity'],
    'HTC TyTN II' => ['HTC', 'TyTN II'],
    'P4550' => ['HTC', 'TyTN II'],
    'HTC Kaiser' => ['HTC', 'TyTN II'],
    'HTC TyTN!' => ['HTC', 'TyTN'],
    'HTC Mercury' => ['HTC', 'TyTN'],
    'T9188' => ['HTC', 'T9188'],
    'T9199' => ['HTC', 'T9199'],
    'HTC wizard' => ['HTC', 'Wizard'],
    'i-mate JAMA' => ['i-mate', 'JAMA'],
    'i-mate JAMAQ' => ['i-mate', 'JAMAQ'],
    'i-mate JAMin' => ['i-mate', 'JAMin'],
    'i-mate JASJAM' => ['i-mate', 'JASJAM'],
    'i-mate JAQ' => ['i-mate', 'JAQ'],
    'i-mate JAQ3' => ['i-mate', 'JAQ3'],
    'i-mate K-JAM' => ['i-mate', 'K-JAM'],
    'i-mate PDAL' => ['i-mate', 'PDAL'],
    'i-mate 6150' => ['i-mate', 'Ultimate 6150'],
    'i-mate 8150!' => ['i-mate', 'Ultimate 8150'],
    'i-mate 8502' => ['i-mate', 'Ultimate 8502'],
    'i-mate 9502!' => ['i-mate', 'Ultimate 9502'],
    'W366' => ['K-Touch', 'W366'],
    'K-Touch W366!' => ['K-Touch', 'W366'],
    'Kyocera-E4000' => ['Kyocera', 'Solo E4000'],
    'Lenovo ET860' => ['Lenovo', 'ET860'],
    'LENOVO-ET980' => ['Lenovo', 'ET980'],
    'LG-GM730!' => ['LG', 'Eigen GM730'],
    'GM730' => ['LG', 'Eigen GM730'],
    'LG-GM750!' => ['LG', 'Layla GM750'],
    'GM750Q' => ['LG', 'Layla GM750'],
    'LG-GW550!' => ['LG', 'GW550'],
    'GW550' => ['LG', 'GW550'],
    'GW825' => ['LG', 'IQ GW825'],
    'LG-KS20' => ['LG', 'KS20'],
    'LG-MS25' => ['LG', 'MS25'],
    'LGE VS750' => ['LG', 'Fathom VS750'],
    'A3100' => ['Motorola', 'A3100'],
    'A3300c' => ['Motorola', 'A3300c'],
    'A4500!' => ['Motorola', 'A4500'],
    'ES405B!' => ['Motorola', 'ES405 Enterprise Smartphone'],
    'MC45!' => ['Motorola', 'MC45 Mobile Computer'],
    'MC659B!' => ['Motorola', 'MC65 Wireless Rugged Mobile Computer'],
    'Q-UMTS' => ['Motorola', 'Q'],
    'Q8' => ['Motorola', 'MOTO Q8'],
    'Q9' => ['Motorola', 'MOTO Q9'],
    'Sprint:MotoQ9c' => ['Motorola', 'MOTO Q9c'],
    'Q9c!' => ['Motorola', 'MOTO Q9c'],
    'Q9m!' => ['Motorola', 'MOTO Q9m'],
    'VIP12!' => ['Motorola', 'VIP 1200', DeviceType::TELEVISION],
    'H-21' => ['Opticom', 'H-21'],
    'Palm500!' => ['Palm', 'Treo 500v'],
    'Palm750' => ['Palm', 'Treo 750'],
    'Treo800w' => ['Palm', 'Treo 800w'],
    'Palm850!' => ['Palm', 'Treo Pro'],
    'Palm Treo850e' => ['Palm', 'Treo Pro'],
    'Sprint Treo850e' => ['Palm', 'Treo Pro'],
    'PANTECH-C810' => ['Pantech', 'Duo C810'],
    'GT-B5722' => ['Samsung', 'B5722'],
    'GT-B6520' => ['Samsung', 'B6520 OmniaPRO 5'],
    'GT-B7300' => ['Samsung', 'B7300 OmniaLITE'],
    'GT-B7320!' => ['Samsung', 'B7320 OmniaPRO'],
    'GT-B7330!' => ['Samsung', 'B7330 OmniaPRO'],
    'GT-B7350' => ['Samsung', 'B7350 OmniaPRO 4'],
    'GT-B7610' => ['Samsung', 'B7610 OmniaPRO'],
    'GT-C6625' => ['Samsung', 'C6625 Valencia'],
    'C6625' => ['Samsung', 'C6625 Valencia'],
    'GT-I8000!' => ['Samsung', 'I8000 Omnia II'],
    'SCH-M490' => ['Samsung', 'M490 T*OMNIA'],
    'SCH-M710' => ['Samsung', 'M710 T*OMNIA II'],
    'SCH-M715' => ['Samsung', 'M715 T*OMNIA II'],
    'SPH-M7200' => ['Samsung', 'M7200 OMNIA POP'],
    'SPH-M7350' => ['Samsung', 'M7350 OZ OMNIA'],
    'SPH-M8400' => ['Samsung', 'M8400 Show OMNIA'],
    'SCH-i220!' => ['Samsung', 'i220 Code'],
    'SCH-i225!' => ['Samsung', 'i225 Exec'],
    'SPHI325!' => ['Samsung', 'i325 Ace'],
    'SGH-i600!' => ['Samsung', 'i600'],
    'SGH-i601!' => ['Samsung', 'i601'],
    'SGH-I607' => ['Samsung', 'i607 BlackJack'],
    'SGH-i608!' => ['Samsung', 'i608'],
    'SGH-I617' => ['Samsung', 'i617 BlackJack II'],
    'SGH-I637' => ['Samsung', 'i637 Jack'],
    'SGH-i640!' => ['Samsung', 'i640'],
    'SGH-i718' => ['Samsung', 'i718'],
    'SGH-i718plus' => ['Samsung', 'i718 Plus'],
    'SGH-i728' => ['Samsung', 'i728'],
    'SCH-i760!' => ['Samsung', 'i760'],
    'SCH-i770!' => ['Samsung', 'i770 Saga'],
    'SGH-i780!' => ['Samsung', 'i780 Mirage'],
    'SGH-i900!' => ['Samsung', 'i900 Omnia'],
    'SGH-i908E' => ['Samsung', 'i908'],
    'SCHI910!' => ['Samsung', 'i910 Omnia'],
    'SCH-i920' => ['Samsung', 'i920 Omnia II'],
    'SIE-SX66' => ['Siemens', 'SX66'],
    'M1i' => ['Sony Ericsson', 'Aspen'],
    'X1' => ['Sony Ericsson', 'Xperia X1'],
    'X1[ia]!' => ['Sony Ericsson', 'Xperia X1'],
    'X2' => ['Sony Ericsson', 'Xperia X2'],
    'X2[ia]!' => ['Sony Ericsson', 'Xperia X2'],
    'Spice D1100' => ['Spice', 'D1100'],
    '(Toshiba[- ])?TG01!' => ['Toshiba', 'TG01'],
    'Velocity' => ['Velocity', '111'],
    'ZTE E N72' => ['ZTE', 'E N72'],
    'ZTE E X70' => ['ZTE', 'E X70'],


    'sigmarion3' => ['NTT', 'sigmarionIII'],

    'o2 Xda comet' => ['O2', 'XDA Comet'],
    'Xda diamond' => ['O2', 'XDA Diamond'],
    'Xda neo' => ['O2', 'XDA Neo'],
    'Xda nova' => ['O2', 'XDA Nova'],
    'Xda orbit' => ['O2', 'XDA Orbit'],
    'Xda terra' => ['O2', 'XDA Terra'],
    'Xda trion' => ['O2', 'XDA Trion'],
    'O2 Xda 2mini' => ['O2', 'XDA II mini'],
    'O2 Xda 2s' => ['O2', 'XDA IIs'],

    'SPV E600' => ['Orange', 'SPV E600'],
    'SPV E650' => ['Orange', 'SPV E650'],
    'SPV M700' => ['Orange', 'SPV M700'],
    'SPV M2000' => ['Orange', 'SPV M2000'],
    'SPV M3100' => ['Orange', 'SPV M3100'],

    'Alltel HTC PPC6800' => ['Alltel', 'PPC6800'],
    'Alltel HTC Touch' => ['HTC', 'Touch', 'carrier' => 'Alltel'],
    'Alltel HTC Touch Diamond' => ['HTC', 'Touch Diamond', 'carrier' => 'Alltel'],

    'Sprint S511' => ['Sprint', 'Snap'],
    'Sprint:SPH-ip830w' => ['Sprint', 'SPH-ip830w'],
    'Sprint:PPC6600-1' => ['Sprint', 'PPC6600'],
    'Sprint:PPC-6700' => ['Sprint', 'PPC6700'],
    'Sprint:PPC6800' => ['Sprint', 'PPC6800'],
    'Sprint PPC6850SP' => ['Sprint', 'PPC6850'],
    'HTCPPC6850!' => ['Sprint', 'PPC6850'],
    'PPC6850!' => ['Sprint', 'PPC6850'],
    'Sprint MP6850SP' => ['Sprint', 'MP6850'],
    'Sprint MP6900SP' => ['Sprint', 'MP6900'],
    'Sprint MP6950SP' => ['Sprint', 'MP6950'],

    'Ameo!' => ['T-Mobile', 'Ameo'],
    'T-Mobile Atlas' => ['T-Mobile', 'Atlas'],
    'T-Mobile Dash' => ['T-Mobile', 'Dash'],
    'T-Mobile LEO' => ['T-Mobile', 'Leo'],
    'T-Mobile Cleopatra' => ['T-Mobile', 'Shadow II'],
    'MDA III!' => ['T-Mobile', 'MDA III'],
    'MDA compact II!' => ['T-Mobile', 'MDA Compact II'],
    'MDA compact!' => ['T-Mobile', 'MDA Compact'],
    'MDA Pro!' => ['T-Mobile', 'MDA Pro'],
    'MDA Touch!' => ['T-Mobile', 'MDA Touch'],
    'MDA Vario!' => ['T-Mobile', 'MDA Vario'],

    'XV6175!' => ['Verizon', 'Ozone XV6175'],
    'XV6850!' => ['Verizon', 'Touch Pro XV6850'],
    'XV6875!' => ['Verizon', 'Touch Pro2 XV6875'],
    'XV6900' => ['Verizon', 'Touch XV6900'],
    'XV6975' => ['Verizon', 'Imagio XV6975'],

    'SFR v3650!' => ['Vodafone', 'Polaris'],
    'v1415' => ['Vodafone', 'Vox'],
    'v1240' => ['Vodafone', 'VDA II'],
    '1210' => ['Vodafone', 'VDA IV'],
    'v1210' => ['Vodafone', 'VDA IV'],
    'HTC VDA V' => ['Vodafone', 'VDA V'],
    'v1640' => ['Vodafone', 'VPA IV'],
    'VPA Touch' => ['Vodafone', 'VPA Touch'],
    'HTC v1510' => ['Vodafone', 'VPA Compact GPS'],
    'HTC VPACompactIV' => ['Vodafone', 'VPA Compact IV'],


    'WS003SH' => ['Sharp', 'W-ZERO3 WS003SH', 'carrier' => 'Willcom'],
    'WS004SH' => ['Sharp', 'W-ZERO3 WS004SH', 'carrier' => 'Willcom'],
    'WS007SH' => ['Sharp', 'W-ZERO3 [es] WS007SH', 'carrier' => 'Willcom'],
    'WS011SH' => ['Sharp', 'Advanced / W-ZERO3 [es] WS011SH', 'carrier' => 'Willcom'],
    'WS020SH' => ['Sharp', 'WILLCOM 03 WS020SH', 'carrier' => 'Willcom'],
    'WS027SH' => ['Sharp', 'HYBRID W-ZERO3 WS027SH', 'carrier' => 'Willcom'],
    'S01SH' => ['Sharp', 'EM·ONE S01SH', 'carrier' => 'EMOBILE'],
    'S01SH2' => ['Sharp', 'EM·ONE alpha S01SH2', 'carrier' => 'EMOBILE'],
    'T-01A!' => ['Toshiba', 'T-01A', 'carrier' => 'DoCoMo'],
    'T-01B!' => ['Toshiba', 'dynapocket T-01B', 'carrier' => 'DoCoMo'],
    'X01T' => ['Toshiba', 'G900 X01T', 'carrier' => 'Softbank'],
    'X02T!' => ['Toshiba', 'dynapocket X02T', 'carrier' => 'Softbank'],
    'KDDI-HT01' => ['HTC', 'TOUCH PRO HT-01A', 'carrier' => 'au'],
    'HT01A' => ['HTC', 'TOUCH PRO HT-01A', 'carrier' => 'au'],
    'S11HT' => ['HTC', 'EMONSTER S11HT', 'carrier' => 'EMOBILE'],
    'S12HT' => ['HTC', 'EMONSTER lite S12HT', 'carrier' => 'EMOBILE'],
    'S21HT' => ['HTC', 'Touch Diamond S21HT', 'carrier' => 'EMOBILE'],
    'S22HT' => ['HTC', 'Dual Diamond S22HT', 'carrier' => 'EMOBILE'],
    'X01HT' => ['HTC', 'TyTN X01HT', 'carrier' => 'Softbank'],
    'X02HT' => ['HTC', 'S630 X02HT', 'carrier' => 'Softbank'],
    'X03HT' => ['HTC', 'S730 X03HT', 'carrier' => 'Softbank'],
    'X04HT' => ['HTC', 'TOUCH DIAMOND X04HT', 'carrier' => 'Softbank'],
    'X05HT' => ['HTC', 'TOUCH PRO X05HT', 'carrier' => 'Softbank'],
    'SC-01B' => ['Samsung', 'SC-01B', 'carrier' => 'DoCoMo'],
    'X01SC' => ['Samsung', 'OMNIA Pro X01SC', 'carrier' => 'Softbank'],
];
