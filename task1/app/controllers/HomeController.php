<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
             return View::make('task1.layout');
	}
        
        public function showArticleList()
	{
            $articles = array('articles'=>array(
               ['id'=>1,'title'=>"Italy opens up island of Montecristo to tourists"],
               ['id'=>2,'title'=>"Famed Roman statue 'not ancient' "],
               ['id'=>3,'title'=>"Crumbs: half of Britons injured by their biscuits on coffee break, survey reveals"],
               ['id'=>4,'title'=>"Atom-sized transistor created by scientists"],
               ['id'=>5,'title'=>"Japan centenarians at record high "]
                ));
             return View::make('task1.articles',$articles);
	}
        
         public function showAbout()
	{
             return View::make('task1.about');
	}
        
        public function showContact()
	{
        return View::make('task1.contact',array(
            'error'=>'',
        ));
	}
        
        public function showArticle($id)
	{
            $articles_content = array(
               [
                   'id'=>1,
                   'title'=>"Italy opens up island of Montecristo to tourists",
                   'content'=>""
                   . "The tiny Tuscan island of Montecristo, whose mysterious history is filled with saints, monks and pirates, is to be opened up to the public for the first time.
                    Крошечный остров Тосканского архипелага Монтекристо, чья загадочная история пестрит именами святых, монахов и пиратов, будет впервые открыт для публичного посещения. 

                    The diamond-shaped island, which is around four square miles in size, was immortalised by Alexandre Dumas in The Count of Monte Cristo as the site of an enormous hidden treasure.
                    Остров в форме ромба и размером около 12 кв. км прославлен Александром Дюма в романе 'Граф Монте-Кристо' как место, где спрятаны невероятные сокровища.

                    For almost 40 years, since it became a nature reserve, only scientists and researchers have been allowed within three miles of the island's granite cliffs.
                    В течение почти 40 лет, с тех пор как острову присвоили статус природного заповедника, на три мили гранитных скал острова могли попасть только ученые и исследователи.

                    The waters were regularly patrolled to make sure the island's population of monk seals, dolphins, tuna and rare birds was not disturbed.
                    Воды, окружающие остров, постоянно патрулировались. Это делалось для того, чтобы никто не беспокоил обитающих здесь тюленей-монахов, дельфинов, тунцов и редких видов птиц. 

                    Anyone entering the waters illegally was liable to an instant 150 pounds fine.
                    Каждый, кто незаконно входил в акваторию острова, должен был заплатить штраф в 150 фунтов. 

                    However, the Park Authority for the Tuscan Archipelago has now decided to allow up to 1,000 tourists a year to visit Montecristo, which lies 22 miles south of Elba and 40 miles from the coast of Italy.
                    Однако, сейчас дирекция Национального парка Тосканского архипелага согласилась пускать на Монтекристо, который лежит на 22 мили южнее Эльбы и в 40 милях от берега Италии, тысячу туристов в год. 

                    Visitors will be allowed from April 1 to July 15 and then from August 31 to the end of October each year. Trips for 2009 have to be booked with the authority by the end of January next year.
                    Им разрешат приезжать на остров ежегодно с 1 апреля по 15 июля и с 31 августа до конца октября. Поездки, планируемые на 2009 год, должны быть согласованы с руководством заповедника до конца января следующего года.

                    Dumas arrived on the island in 1842, in the company of Napoleon Bonaparte's nephew. 
                    Дюма попал на остров в 1842 году, путешествуя вместе с племянником Наполеона Бонапарта. 

                    'It is fantastic and lonely, smelling of thyme and broom,' he wrote, in a letter.
                    'Фантастический и пустынный, благоухающий тимьяном и ракитником', – заметил Дюма в одном из писем.

                    He decided to write The Count of Monte Cristo to remind him of the trip.
                    В память о поездке он решил написать 'Графа Монте-Кристо'.

                    His hero, Edmond Dantes, discovers a pirate's treasure on the island after being tipped off by his companion in prison, Abbe Faria.
                    Герой романа Эдмон Дантес, которому удалось сбежать из тюрьмы, находит на острове сокровища пирата. О них Дантес, находясь в заключении, узнал от другого узника, аббата Фариа. 

                    Dumas described the island at midday: 'Thousands of grasshoppers, hidden in the bushes, chirped with a monotonous and dull note; the leaves of the myrtle and olive trees waved and rustled in the wind. 
                    Дюма описал остров в лучах полуденного солнца: 'Тысячи кузнечиков, скрытых в вереске, оглашали воздух однообразным и непрерывным стрекотанием; шелестели листья миртов и олив; 

                    'At every step that Edmond took he disturbed the lizards glittering with hues of emerald; afar off he saw the wild goats bounding from crag to crag.'
                    каждый шаг Эдмона по нагретому солнцем граниту спугивал зеленых,цвета изумруда, ящериц; вдали виднелись дикие горные козлы, прыгыющие с камня на камень'.

                    Dumas was inspired by tales of a pirate's haul, buried in one of the island's grottos. In the 1550s, two pirates, Red Beard and Dragut, sacked the monastery on Montecristo and set up their base. Dragut, a Turk, is thought to have accumulated vast wealth and hidden his haul somewhere on the island. 
                    Писателя вдохновили рассказы о пиратских сокровищах, спрятанных в одном из гротов острова. В 1550-х годах два пирата, Рыжая Борода и Драгут, ограбили монастырь на Монтекристо и устроили там свое логово. Считается, что Драгут, турок по национальности, был богат и спрятал свои сокровища где-то на острове. 

                    However, no one has found it yet.
                    Однако пока они не найдены. "
                ],
               [
                   'id'=>2,
                   'title'=>"Famed Roman statue 'not ancient' ",
                   'content'=>""
                   . "A statue symbolising the mythical origins and power of Rome, long thought to have been made around 500BC, has been found to date from the 1200s.
                    Долго считалось, что статуя, символизирующая легендарное зарождение и могущество Рима, была создана приблизительно в 500-ом году до нашей эры, однако было установлено, что дата её рождения приблизительно приходится на 13-ый век.


                    The statue depicts a she-wolf suckling Remus and his twin brother Romulus - who is said to have founded Rome.
                    Статуя изображает волчицу, кормящую грудью Рема и его брата-близнеца Ромула, который, как считается, основал Рим.

                    The statue of the wolf was carbon-dated last year, but the test results have only now been made public.
                    Эта статуя волчицы в прошлом году была подвергнута радиоуглеродному анализу с целью установления даты её создания, однако результаты этого теста стали достоянием общественности только сейчас.

                    The figures of Romulus and Remus have already been shown to be 15th Century additions to the statue.
                    На тот момент уже было обнаружено, что фигуры Ромула и Рема были дополнениями статуи, сделанными в 15-ом веке.

                    In a front page article in the Italian newspaper, La Repubblica, Rome's former top heritage official, Professor Adriano La Regina, said about 20 tests were carried out on the she-wolf at the University of Salerno.
                    В статье, опубликованной на первой полосе итальянской газеты 'Республика' (La Repubblica), бывший высший чиновник по вопросам римского культурного наследия, профессор Адриано Ла Реджина, сообщил, что в университете города Салерно были на статуе волчицы выполнены около 20 тестов.

                    He said the results of the tests gave a very precise indication that the statue was manufactured in the 13th Century.
                    Он сообщил, что результаты этих исследований дали очень точное указание на то, что эта статуя была изготовлена в 13-ом столетии.


                    Damaged paw
                    Повреждённая лапа"
               ],
               [
                   'id'=>3,
                   'title'=>"Crumbs: half of Britons injured by their biscuits on coffee break, survey reveals",
                   'content'=>''
                   . 'More than half of all Britons have been injured by biscuits ranging from scalding from hot tea or coffee while dunking or breaking a tooth eating during a morning tea break, a survey has revealed. 
                    Исследование показало, что более половины британцев получают травмы, поедая печенье: ожоги горячим чаем или кофе, когда они макают туда своё печенье, или сломанный зуб во время утреннего чаепития – обычное дело.


                    An estimated 25 million adults have been injured while eating during a tea or coffee break – with at least 500 landing themselves in hospital, the survey revealed. 
                    По результатам исследования, 25 миллионов взрослых людей получили травмы во время перерыва на чай или кофе – из них, по крайней мере, 500 человек попали в больницу. 

                    The custard cream biscuit was found to be the worse offender to innocent drinkers. 
                    Печенье с заварным кремом было признано злейшим обидчиком невинных любителей горячих напитков. 

                    It beat the cookie to top a table of 15 generic types of biccy whose potential dangers were calculated by The Biscuit Injury Threat Evaluation. 
                    Оно опередило печенья 15 распространенных видов, чья небезопасность была посчитана с помощью "Анализа травмоопасности печенья".

                    Hidden dangers included flying fragments and being hurt while dunking in scalding tea through to the more strange such as people poking themselves in the eye with a biscuit or fallen off a chair reaching for the tin.
                    Скрытые опасности таятся в самих крошках печенья и в процессе обмакивания печенья в очень горячий чай. Что ещё более странно, опасности связаны с тыканьем себя печеньем в глаз или падением со стула, в результате попытки дотянуться до жестянки с печеньем.

                    One man even ended up stuck in wet concrete after wading in to pick up a stray biscuit.
                    Один мужчина дошел до того, что увяз в свежем бетонном растворе, когда хотел поднять печенье, случайно там оказавшееся.

                    Custard creams get a risk rating of 5.63, the highest of all.
                    Печенье, прослоенное кремовой начинкой, имеет показатель риска равный 5.63, больший из всех.

                    This compared to 1.16 for Jaffa cakes, which was the safest biscuit of all in the evaluation.
                    Сравните этот фактор с фактором 1.16 у бисквитного печенья Jaffa, самого безопасного печенья в исследовании. 

                    Research company Mindlab International were commissioned by Rocky, a chocolate biscuit bar, to conduct the research.
                    Исследовательская компания Mindlab International была привлечена к исследованию Rocky, производителем шоколадных батончиков с печеньем.

                    It found almost a third of adults said they had been splashed or scalded by hot drinks while dunking or trying to fish the remnants of a collapsed digestive.
                    Было обнаружено, что одна треть взрослых, пытаясь размягчить остатки печенья (в целях облегчения пищеварения), обжигается горячими напитками или расплёскивает их.

                    It also revealed 28 per cent had choked on crumbs while one in 10 had broken a tooth or filling biting a biscuit.
                    Выяснилось также, что 28 процентов людей давились крошками, а каждый десятый, хотя бы раз, печеньем ломал себе зуб или пломбу.

                    More unusually, three per cent had poked themselves in the eye with a biscuit and seven per cent bitten by a pet or "other wild animal" trying to get their biscuit.
                    Ещё более удивительно, что три процента попадали печеньем себе в глаз, а семь процентов подвергались нападениям как домашних, так и диких животных, которые пытались отобрать у них печенье. 
                '],
                [
                    'id'=>4,
                    'title'=>"Atom-sized transistor created by scientists",
                    'content'=>""
                   . "Scientists have shrunk a transistor to the size of a single atom,
                    Учёные уменьшили размеры транзистора до одного атома,

                    bringing closer the day of microscopic electronic devices that will revolutionise computing, engineering and medicine.
                    приблизив эру микроскопических электронных устройств, которые произведут революцию в информационных технологиях, инженерии и медицине. 

                    Researchers at Cornell University, New York, and Harvard University, Boston, fashioned the two 'nano-transistors' from purpose-made molecules. 
                    Исследователи из Корнельского университета (Нью-Йорк) и Гарвардского университета (Бостон) создали два 'нано-транзистора' из специально подготовленных молекул. 

                    When voltage was applied, electrons flowed through a single atom in each molecule.
                    Когда подавалось напряжение, электроны передавались посредством одного атома каждой молекуле.

                    The ability to use individual atoms as components of electronic circuits marks a key breakthrough in nano-technology, the creation of machines at the smallest possible size.
                    Возможность использования отдельных атомов в качестве компонентов электронных схем знаменует ключевой прорыв в области нано-технологий - создание устройств минимального размера.

                    Prof Paul McEuen, a physicist at Cornell, who reports the breakthrough in today's issue of Nature, said the single-atom transistor did not have all the functions of a conventional transistor such as the ability to amplify.
                    Профессор Пол Макуин, физик из Корнелла, который рассказал о прорыве в современных исследованиях, сообщил, что транзистор из одного атома не имеет функций обычного транзистора, таких как способность к усилению.

                    But it had potential use as a chemical sensor to any change in its environment.
                    Однако он имеет потенциал использования в качестве химического датчика, реагирующего на любые изменения в окружающей среде. 

                    By David Derbyshire, Science Correspondent "
                ],
                [
                    'id'=>5,
                    'title'=>"Japan centenarians at record high ",
                    'content'=>""
                   . "The number of Japanese people hitting the landmark age of 100 has reached record levels. 
                    Число японцев, доживших до столетнего возраста, достигло рекордного уровня. 

                    There are now 36,276 centenarians in the country – a rise of 4,000 on last year's figure, a report by the Health and Welfare Ministry found.
                    В докладе Министерства здравоохранения и социального обеспечения говорится, что в сегодня стране насчитывается 36 276 человек, которым сто и более лет, – это на 4000 человек больше, чем число столетних граждан в прошлом году. 

                    Women make up the vast majority of those who are living past 100.
                    Среди тех, кто живёт более ста лет, женщины составляют подавляющее большинство. 

                    Japan has one of the world's longest life expectancies, but there are concerns about the burden this is placing on society.
                    В Японии средняя продолжительность жизни граждан является одной из самых длинных в мире, однако существует беспокойство относительно бремени, которое это явление накладывает на общество. 

                    Both the country's pension system and social services are under pressure from its burgeoning greying population. 
                    И пенсионная система страны и социальные службы испытывают давление растущей 'седовласой популяции'. 

                    Active lives"
                ]
            );
            
            return View::make('task1.article',$articles_content[$id]);
    }


    public function postContact()
    {
        Input::flash();
        if(Input::has('name'))
            $name = Input::get('name');
        else $name="";
        
        if(Input::has('message'))
            $message = Input::get('message');
        else $message="";

        //$old_mame = !is_null(Input::old('name'))?Input::old('name'):"";
        //$old_mes = !is_null(Input::old('message'))?Input::old('message'):"";

        
        if(trim($name)=='' || trim($message)=='')
           return View::make('task1.contact',array(
                'error'=>'Filled the fiels'
            ));
            //return Redirect::to('contact-us')->withInput()->with('error','Filled the fields');
        else
           return Redirect::to('thank')->withInput(); 
           // return View::make('task1.thank')->with('name',$name);
    }

    public function showThank()
    {
        $name = Input::old('name');
        return View::make('task1.thank')->with('name', $name);

    }



}
