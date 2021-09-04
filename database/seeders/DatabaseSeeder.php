<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Product;
use App\Models\Street;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Бруснивер',
            'short_description' => 'Противомикробное растительное средство широкого спектра действия — активен в отношении стафилококка, кишечной палочки, синегнойной палочки, протея и некоторых других микроорганизмов, что в сочетании с мочегонным и противовоспалительным эффектом позволяет использовать сбор Бруснивер в комплексном лечении острых и хронических заболеваний. В урологии — это цистит, уретрит, простатит. Здесь лекарственный настой принимают внутрь. В гинекологии — вагинит и вульвит — настой используют в виде орошений, спринцеваний, ванночек и примочек. В проктологии, в том числе при геморрое, Бруснивер принимают и наружно и внутрь: пьют настой, делают из него микроклизмы и примочки.',
            'description' => 'О препарате
Показания к применению: настой сбора применяют в качестве противомикробного, противовоспалительного и диуретического средства в комплексной терапии острых и хронических заболеваний в урологии (цистит, уретрит, простатит), гинекологии (вагинит, вульвит неспецифической этиологии) и проктологии (проктит, воспаление геморроидальных узлов, анальные трещины, колит).

Фармакологическое действие: настой сбора оказывает противомикробное действие в отношении стафилококка, кишечной палочки, синегнойной палочки, протея и некоторых других микроорганизмов, а также противовоспалительное и диуретическое действие.

Безопасность и качество
Эффективность и безопасность лекарственных препаратов зависит от исходного растительного сырья. Качество нашего сырья обеспечено тщательным входным контролем поступающих партий и работой с проверенными и одобренными поставщиками лекарственных растений.',
        ]);
        Product::create([
            'name' => 'Березы листья',
            'short_description' => 'Листья березы — хорошо известный диуретик. В отличие от многих синтетических мочегонных средств, натуральный настой березовых листьев имеет минимум ограничений к приему. Он применяется при отечности, вызванной болезнями сердца («сердечные отеки»), нарушении работы почек, при задержке жидкости при некоторых других состояниях.

Для лечебного применения листья березы заготавливают только в экологически чистых районах, и тщательно проверяют на всех стадиях производства — от собранного сырья до готового пакетика, из которого будет приготовлен лекарственный напиток.',
            'description' => 'О растении
Береза повислая (Betula pendula Roth) и береза пушистая (Betula pubescens Ehrh.) семейства березовых (Betulaceae).

Описание: береза повислая — листопадное дерево с белой, легко расслаивающейся корой. У старых деревьев кора в нижней части стволов черно-серая, с трещинами. Ветви обычно повислые, отсюда и название — «плакучая береза». Молодые побеги красно-бурые, голые, покрытые смолистыми железками. Почки прямые, голые. Листья очередные, с широким клиновидным основанием, зубчатые по краю, молодые листья клейкие. Цветки раздельнополые, собранные в соцветия сережки. Плод — крылатый орешек с двумя перепончатыми крыльями. Цветет при распускании листьев в мае.

Береза пушистая отличается от березы повислой короткими, неповисающими ветвями.

Состав: почки березы содержат эфирное масло, смолистые вещества, флавоноиды, фитонциды.

Показания к применению: в качестве диуретического средства при отеках сердечно-сосудистого и почечного происхождения.

Фармакологическое действие:

Листья березы – хорошо известный диуретик. В отличие от многих синтетических мочегонных средств, натуральный настой березовых листьев имеет минимум ограничений к приему. Он применяется при отечности, вызванной болезнями сердца («сердечные отеки»), нарушении работы почек, при задержке жидкости при некоторых других состояниях. Для лечебного применения листья березы заготавливают только в экологически чистых районах, и тщательно проверяют на всех стадиях производства – от собранного сырья до готового пакетика, из которого будет приготовлен лекарственный напиток.

Интересные факты
Кроме почек и листьев целебными являются и другие части березы. Березовый сок известен в народе своими общеукрепляющими и мочегонными свойствами.

Наши бабушки умывались березовым соком для очищения кожи от угрей, пигментных пятен и придания ей свежести. А деготь, получаемый при сухой перегонке березовой древесины, с очень давних пор используется в медицине для лечения паразитарных и грибковых заболеваний кожи, экзем и других.

Интересно, что целебны не только все части этого замечательного дерева, но и гриб, паразитирующий на его стволе и называемый чагой.

Экстракт из майских листьев березы в зависимости от концентрации хорошо окрашивает шерстяные и хлопчатобумажные ткани в желтый, черно-коричневый, желтовато-зеленый и золотисто-желтый цвета. Кора служит хорошим дубителем.

Безопасность и качество
Эффективность и безопасность лекарственных препаратов зависит от исходного растительного сырья. Качество нашего сырья обеспечено тщательным входным контролем поступающих партий и работой с проверенными и одобренными поставщиками лекарственных растений.',
        ]);
        Product::create([
            'name' => 'Грудной сбор №4',
            'short_description' => 'Одно из самых часто назначаемых средств растительной медицины при кашле. Грудной сбор №4 сочетает в себе разнонаправленную силу нескольких растений, известных своими отхаркивающими, противовоспалительными и противомикробными свойствами.

В состав препарата входят: ромашка, багульник, календула (ноготки), фиалка, солодка, мята.

Сбор может помочь в составе комплексного лечения бронхитов, трахеитов и других заболеваний дыхательных путей с трудноотделяемой мокротой.

Благодаря своим противовоспалительным свойствам позволяет бороться не только с кашлем, но и с его причиной — воспалением.',
            'description' => 'О препарате
Показания к применению: в комплексной терапии при воспалительных заболеваниях дыхательных путей, сопровождающихся кашлем с трудноотделяемой мокротой (в том числе бронхит, трахеит).

Фармакологическое действие: настой оказывает отхаркивающее и противовоспалительное действие.

Интересные факты
Узнайте, как правильно применять Грудной Сбор №4 при лечении воспалительных заболеваний дыхательных путей (при «влажном» кашле с трудноотделяемой мокротой).


Безопасность и качество
Эффективность и безопасность лекарственных препаратов зависит от исходного растительного сырья. Качество нашего сырья обеспечено тщательным входным контролем поступающих партий и работой с проверенными и одобренными поставщиками лекарственных растений.',
        ]);
        Product::create([
            'name' => 'Ромашки цветки',
            'short_description' => 'За многочисленные лекарственные свойства и возможности ромашку часто называют символом растительной медицины.

Настой из ее цветков пьют при желудочных и кишечных болезнях — гастрите, язвенной болезни, энтерите, колите, метеоризме, диарее. Он помогает справиться со спазмами, уменьшить брожение, борется с микробами и воспалением.

В виде микроклизм ромашку назначают при кишечных спазмах и геморрое.

В качестве полосканий - при гингивитах, стоматитах, тонзиллитах, фарингитах. Благодаря комплексному действию она работает сразу и с болезненными симптомами, и с их причиной.',
            'description' => 'О растении
Ромашка аптечная (Matricaria recutita L. (Matricaria chamomilla L., Chamomilla recutita (L.) Rauschert)) — однолетнее травянистое растение семейства астровых.

Народные названия: маточная трава.

Описание: ромашка аптечная представляет собой однолетнее травянистое растение с сильным ароматным запахом. Стебель сильноветвистый. Листья очередные, дваждыперисторассеченные на линейные дольки. Цветки собраны в корзинки с коническим полым цветоложем. Краевые цветки — белые, язычковые, женские; срединные цветки — желтые, трубчатые, обоеполые. Плод — продолговатая семянка с 3 ребрами, не имеющая хохолка.

Состав: цветки ромашки содержат флавоноиды (апигенин), эфирное масло (сесквитерпены, матрицин, матрикарин), салициловую кислоту, каротиноиды, слизи, камеди, горечи и другие биологически активные вещества.

Показания к применению: применяют внутрь в комплексной терапии при хроническом гастрите, язвенной болезни желудка и двенадцатиперстной кишки, при хроническом энтерите, хроническом колите, метеоризме, спазмах кишечника, диарее (поносе).

Местно — для полосканий при инфекционно-воспалительных заболеваниях полости рта и глотки (фарингит, тонзиллит, стоматит, гингивит).

В виде микроклизм применяется при спастическом колите, геморрое.

Фармакологическое действие:

За многочисленные лекарственные свойства и возможности ромашку часто называют символом растительной медицины. Настой из ее цветков пьют при желудочных и кишечных болезнях - гастрите, язвенной болезни, энтерите, колите, метеоризме, диарее. Он помогает справиться со спазмами, уменьшить брожение, борется с микробами и воспалением. В виде микроклизм ромашку назначают при кишечных спазмах и геморрое. В качестве полосканий - при гингивитах, стоматитах, тонзиллитах, фарингитах. Благодаря комплексному действию она работает сразу и с болезненными симптомами, и с их причиной.

Интересные факты
По одной версии название «ромашка» происходит от латинского matrix — матка, так как в старину она применялась при женских болезнях, по другой версии — от греческих слов chama — земля и mellon — яблоко. Плиний Старший утверждал, что запах ромашки напоминает яблочный, и называл ее земляным яблоком.

В Прикарпатье существовало поверие, что весной, когда начинает пригревать солнышко, снежинки со склонов гор превращаются в ромашки, а осенью ромашки вновь становятся снежинками.

Безопасность и качество
Эффективность и безопасность лекарственных препаратов зависит от исходного растительного сырья. Качество нашего сырья обеспечено тщательным входным контролем поступающих партий и работой с проверенными и одобренными поставщиками лекарственных растений.',
        ]);
        Product::create([
            'name' => 'Дуба кора',
            'short_description' => 'Лечебные свойства коры дуба заключаются в веществах, которые так и называются — «дубильные». Они дают характерную терпкую горечь и обладают вяжущими свойствами, которые очень помогают при лечении воспалительных заболеваний слизистых тканей, укрепляя и оздоравливая их.

Отвар из коры дуба применяется местно — для полосканий рта (при гингивитах и стоматитах), и горла (при тонзиллитах и фарингитах). Помимо дубильных веществ кора дуба содержит противовоспалительные элементы. Это усиливает лекарственную ценность ее отвара, помогая воздействовать на весь механизм болезни в целом.',
            'description' => 'О растении
Дуб обыкновенный (черешчатый) — Quercus robur L. и дуб скальный — Quercus petrea (Mattuschka) Liebl. cемейства буковых — Fagaceae.

Описание: представляют собой деревья до 40 метров выcотой с сильно разветвленной корневой системой, раскидистой кроной и мощным стволом. Кора у старых деревьев буро-серая, толщиной до 10 сантиметров, с трещинами, у молодых стволов и ветвей — гладкая, оливково-бурая. Листья простые, очередные, продолговато-обратнояйцевидные, голые, блестящие. Плоды — желуди, буровато-желтые с продолговатыми полосками и шипиком на верхушке, на 1\3- 1\4 погружены в неглубокую чашевидную плюску.

Состав: кора дуба содержит дубильные вещества, галловую и элаговую кислоты, флавоноиды, тритерпеноиды.

Показания к применению: воспалительные заболевания слизистой оболочки полости рта, зева, глотки — стоматит, гингивит, тонзиллит, фарингит.

Фармакологическое действие:

Лечебные возможности коры дуба заключаются в веществах, которые так и называются - «дубильные». Они дают характерную терпкую горечь и обладают вяжущими свойствами, которые очень помогают при лечении воспалительных заболеваний слизистых тканей, укрепляя и оздоравливая их. Отвар из коры дуба применяется местно - для полосканий рта (при гингивитах и стоматитах), и горла (при тонзиллитах и фарингитах). Помимо дубильных веществ кора дуба содержит противовоспалительные элементы. Это усиливает лекарственную ценность ее отвара, помогая воздействовать на весь механизм болезни в целом.

Интересные факты
По одной из версий латинское название дуба Quercus произошло от кельтского «красное (красивое) дерево». Плиний писал о нем: «...дубы, нетронутые веками, одного возраста со Вселенной, они поражают своей, почти бессмертной судьбой, как величайшее чудо мира».

В Литве растет дуб, возраст которого определен в 2000 лет! У древних славян дуб считался священным деревом бога грома и молний Перуна.

Безопасность и качество
Эффективность и безопасность лекарственных препаратов зависит от исходного растительного сырья. Качество нашего сырья обеспечено тщательным входным контролем поступающих партий и работой с проверенными и одобренными поставщиками лекарственных растений.',
        ]);
        Product::create([
            'name' => 'Брусники листья',
            'parent_id' => '1',
        ]);
        Product::create([
            'name' => 'Зверобоя трава',
            'parent_id' => '1',
        ]);
        Product::create([
            'name' => 'Шиповника плоды',
            'parent_id' => '1',
        ]);
        Product::create([
            'name' => 'Череды трава',
            'parent_id' => '1',
        ]);
        Product::create([
            'name' => 'Березы листья',
            'parent_id' => '2',
        ]);
        Product::create([
            'name' => 'Ромашки цветки',
            'parent_id' => '4',
        ]);
        Product::create([
            'name' => 'Дуба кора',
            'parent_id' => '5',
        ]);
        Product::create([
            'name' => 'Ромашки цветки',
            'parent_id' => '3',
        ]);
        Product::create([
            'name' => 'Багульника болотного побеги',
            'parent_id' => '3',
        ]);
        Product::create([
            'name' => 'Ноготков цветки',
            'parent_id' => '3',
        ]);
        Product::create([
            'name' => 'Фиалки трава',
            'parent_id' => '3',
        ]);
        Product::create([
            'name' => 'Солодки корни',
            'parent_id' => '3',
        ]);
        Product::create([
            'name' => 'Мяты перечной листья',
            'parent_id' => '3',
        ]);
    }
}
