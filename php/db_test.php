<?php
    require_once "../SleekDB-master/src/Store.php";
    $databaseDirectory = "../db/nabla";
    $newsStore = new \SleekDB\Store("news", $databaseDirectory);
//    $article = [
//    "img" => "img/news/zimowy_2020-2021/26-11.jpg",
//    "des" => "Zapraszamy na pierwszy w tym
//    semestrze wykład zaproszony KNF Nabla.
//    Naszym gościem będzie pracownik Katedry Fizyki Teoretycznej WPPT -
//    dr Adam Sajna, który przedstawi nam zagadnienie dynamiki kwantowej w reprezentacji
//    przestrzeni fazowej. Wykład odbędzie się w formie zdalnej na platformie Zoom.",
//    "date" => "zimowy_2020-2021"
//    ];
//$results = $newsStore->insert($article);
//    $article = [
//    "img" => "img/news/zimowy_2020-2021/3-12.jpg",
//    "des" => "Miło nam zaprosić na drugi wykład zaproszony KNF Nabla w bieżącym semestrze!
//Naszym gościem będzie dr hab. Paweł Gusin, pracownik Katedry Technologii Kwantowych na WPPT.
//Kwantowa grawitacja to przedsięwzięcie ciągle wymykające się realizacji. Przy pewnych drastycznych
//ograniczeniach na liczbę stopni swobody i przybliżeniach (równanie Wheelera –de Witta staje się
//rozwiązywalne, kwantowa teoria pola na zakrzywionej czasoprzestrzeni) otrzymuje się model,
//który można opisywać teoretycznie i co więcej ma on swoje potwierdzenie doświadczalne w
//mikrofalowym widmie promieniowania tła (z ang. CMB). Przedmiotem prezentacji będzie droga do
//otrzymanie klasycznej granicy kwantowych fluktuacji promieniowania tła
//(czyli droga do otrzymania obserwowalnego Wszechświata). Droga ta nie jest skończona i
//pojawia się wiele fundamentalnych przeszkód, które zostaną usunięte gdy zostanie sformułowana
//kwantowa teoria grawitacj.",
//    "date" => "zimowy_2020-2021"
//];
//    $results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/7-12.jpg",
//    "des" => "Zapraszamy na trzeci wykład zaproszony KNF Nabla w bieżącym semestrze!
//Naszym gościem będzie prof. dr hab. Maciej Maśka, który opowie o machine learningu i
//sieciach neuronowych. Omówione zostaną zagadnienia takie jak budowa pojedynczego
//sztucznego neuronu, budowa i działanie sztucznej sieci neuronowej i przedstawiona
//zostanie typowa klasyfikacja zadań nauczania maszynowego wraz z przykładami zastosowań w
//poszczególnych obszarach. Następnie skoncentrujemy się na wykorzystaniu nauczania maszynowego w fizyce.
//Część ta obejmie m.in. użycie sieci neuronowych do identyfikacji przejścia fazowego, włączenie z
//tzw. \"learning by confusion\" czy przyspieszenie symulacji Monte Carlo poprzez zastosowanie
//techniki zwanej \"self-learning Monte Carlo\".",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/matlab.png",
//    "des" => "Pierwsze warsztaty z Nablą we współpracy z SPIE Wrocław University of
//    Science and Technology! Jeśli zawsze chciałeś nauczyć się MATLABa, ale nie wiedziałeś
//    jak się do tego zabrać, masz teraz okazję, by się z nim zaznajomić. MATLAB to program
//    komputerowy będący interaktywnym środowiskiem do wykonywania obliczeń naukowych i
//    inżynierskich, oraz do tworzenia symulacji komputerowych. Zapisy zakończone!",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/17-12.jpg",
//    "des" => "Zapraszamy na kolejny wykład z KNF Nabla!
//Naszym gościem będzie pracownik Katedry Fizyki Teoretycznej WPPT - dr Wojciech Radosz, który opowie nam o układach
//polimerowych i modelu Q-wyborcy. Wykład odbędzie się w formie zdalnej na platformie Zoom.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/21-12.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Naszym gościem będzie pracownik Katedry Fizyki Teoretycznej WPPT - dr inż. Michał Gawełczyk,
//który opowie nam o dekoherencji.
//
//Układy kwantowe wyróżnia to, że mogą być w superpozycji stanów, czego anegdotyczną ilustracją jest
//— umęczony przez popularyzatorów fizyki — żywo-matrwy kot Schrödingera. Oddziałując z otoczeniem,
//układ może utracić tę cechę, co nazywa się dekoherencją. Superpozycję zastępuje wtedy statystyczna
//mieszanina — bycie w obu stanach naraz redukuje się do bycia w każdym z nich z pewnym prawdopodobieństwem.
//Tak doświadczony układ już nie zachowuje się, jak na kwantowy przystało, co może być powodem tego,
//że zazwyczaj spotykamy koty żywe i martwe, a takie w superpozycji raczej rzadko.
//Dekoherencja pozwala zatem na pojawienie się zjawisk klasycznych w mechanice kwantowej.
//Innym przykładem jest eksperyment z dwiema szczelinami, w którym światło lub małe cząstki
//(koty stosuje się rzadko) po przejściu przez dwa otworki wytwarzają obraz interferencyjny.
//U źródła leży superpozycja stanów — przejścia lewą i prawą szczeliną. Gdy ktoś podgląda,
//którą z nich cząstka faktycznie leci — interferencja znika. Tym bardziej znika, im bardziej
//nachalny był podglądacz, co pozwala stwierdzić, że dekoherencja wiąże się ze zdobyciem przez
//otoczenie informacji o stanie cząstki. W ramach wystąpienia omówię przykład takiego zjawiska, w
//którym cząstką jest elektron w superpozycji stanów spinowych, a podglądacz jest nietypowy, bo
//stanowi go drżąca (z ciepła, a nie zimna!) sieć krystaliczna. Poza tym postaram się przypomnieć
//sobie, a Państwu przedstawić pozostałe gałęzie mojej działalności.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/latex.png",
//    "des" => "Kolejne warsztaty z Nablą! 🔧🤓 Tym razem pomożemy wam okiełznać LaTeXa.
//
//📝LaTeX to oprogramowanie do zautomatyzowanego składu tekstu, a także związany
//z nim język znaczników, służący do formatowania dokumentów tekstowych i tekstowo-graficznych.
//Warsztaty obejmują pięć spotkań: spotkanie wstępne 08.01 o godz. 19:00, każde kolejne
//poniedziałek o godz. 19:00.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/07-01.jpg",
//    "des" => "Dzień dobry w Nowym Roku! 🌟🎉🎊 Czekaliście na kolejny wykład z Nablą! 🤗🤩
//Naszym gościem będzie dr inż. Andrzej Więckowski który opowie nam o specjalnym automacie komórkowym.
//Podczas spotkania zostanie zaprezentowane i omówione działanie automatu komórkowego typu falling-sand,
//poprzedzone ogólnym wprowadzeniem do automatów komórkowych. Przedstawione zostaną problemy techniczne
//dotyczące implementacji paralelizmu w takim układzie. Omówione zostaną również potencjalne rozszerzenia
//tego systemu.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/14-01.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Naszym gościem będzie mgr Zofia Krzemińska, która podczas spotkania opowie o tym,
//czym jest dział mechaniki kwantowej zwany plazmoniką, dlaczego powstają plazmony i w
//jaki sposób można się zajmować ich badaniem. Przedstawi aktualne i historyczne zastosowania
//efektu plazmonowego w nanocząstkach. Powie także o swoich badaniach, które polegają na
//wykonywaniu symulacji numerycznych dla nanocząstek i ich układów oraz o tym, czym jest
//tzw. tłumienie Lorentza i w jaki sposób można wykorzystać to zjawisko do praktycznych zastosowań.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/zimowy_2020-2021/21-01.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Naszym gościem jest dr Barbara Grygiel z INTiBS, która jest absolwentką Politechniki Wrocławskiej,
//a w czasie studiów należała do KNF Nabla.
//W ostatnich latach układy ultrazimnych gazów atomowych w sieciach optycznych stały
//się bardzo popularne ze względu na możliwość precyzyjnej kontroli ich własności.
//Dzięki temu mogą one zostać wykorzystane jako symulatory kwantowe.
//Dr Grygiel podczas prezentacji przedstawi nam podstawowe informacje dotyczące chłodzenia
// oraz pułapkowania gazów atomowych, jak również przykłady zastosowania sieci optycznych do
// symulacji kwantowych.",
//    "date" => "zimowy_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/letni_2020-2021/topologia.png",
//    "des" => "W tym semestrze będziemy się starać abyście jednocześnie mogli
//    uczęszczać na ciekawe warsztaty z matematyki przydatnej fizykom (i nie tylko) oraz narzędzi komputerowych.
//Tak więc do Matlaba dołączają warsztaty z Topologii Ogólnej!
//
//Warsztaty będą się odbywać przez pięć tygodni, co poniedziałek o
//godzinie 19, a wystartują już 8 marca. Zapraszamy do zapisywania się w formularzu.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/matlab.png",
//    "des" => "Cześć, niestety dla wielu z nas sesja była bardzo pracowita, więc nie udało
//    się podczas niej przeprowadzić warsztatów z Matlaba.
//Ale nic straconego!
//
//Nasi przyjaciele z SPIE Wrocław University of Science and Technology ciągle chcą je dla was poprowadzić.
//Każda zapisana osoba dalej ma pierwszeństwo na warsztaty. ale jeżeli jednak z jakichś powodów
//będzie musiała zrezygnować, to będziemy bardzo wdzięczni za wiadomość.
//
//Warsztaty będą się odbywać co Wtorek o 17:00 przez najbliższe pięć tygodni. Pierwsze zajęcia już 2 marca!
//Kto jeszcze nie miał okazji się zapisać, ten jeszcze ma szansę. Do końca weekendu możecie się
//zapisywać pod linkiem:
//Link niedostępny (koniec zapisów).
//Zdecydowanie warto się zapisać na warsztaty bo Matlab to oprogramowanie, które może wam na
//studiach pozwolić zrobić wiele rzeczy łatwiej, szybciej i bardziej profesjonalnie, a warsztaty
//będą prowadzone przez prawdziwych profesjonalistów.
//
//Przepraszamy za utrudnienia i raz jeszcze wszystkich serdecznie zapraszamy!",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/03-03.gif",
//    "des" => "Naszym pierwszym gościem w letnim semestrze będzie prof. Paweł Hawrylak z Uniwersytetu w Ottawie!
//Profesor przedstawi wykład pt. \"Why Quantum Mechanics?\". Zapraszamy wszystkich zainteresowanych!",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/10-03.gif",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//W tym tygodniu wysłuchamy wykładu dra Jacka Herbrycha - pracownika Katedry Fizyki Teoretycznej WPPT.
//Mile widziane wszystkie zainteresowane osoby!",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/journalclub-poster.png",
//    "des" => "📖 Chciałbyś być na bieżąco z najnowszymi doniesieniami ze świata fizyki?
//
//📖 Brakuje Ci motywacji do samodzielnego przeglądania stosów artykułów?
//
//Zróbmy to razem! Zapraszamy do zapisywania się do naszego nablowego Journal Club,
//który będzie prowadzony przez dr Jacka Herbrycha. Wspólnie będziemy omawiać najciekawsze i
//najświeższe artykuły naukowe. Termin spotkań zostanie ustalony po rekrutacji.
//
//Koniec zapisów.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/stars-poster.png",
//    "des" => "Tym razem mamy coś dla wielbicieli astronomii 🔭🌠
//
//Adam Nowak, jeden z członków KNF Nabla, zaprasza do dołączenia do nowo powstałej grupy badawczej Variable Stars Research Team!
//
//🤔 Jeśli interesujesz się astronomią, to zajęcie idealne dla ciebie! Szukamy osób zajmujących się bazami danych, piszących aplikacje, chętnych do poszukiwań i opracowywania danych.
//Nie zajmujesz się tymi rzeczami, ale jesteś zainteresowany? Napisz co możesz nam zaoferować! 😉
//
//Zgłoszenia do grupy przyjmowane w formularzu.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/letni_2020-2021/17-03.png",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//W tym tygodniu wysłuchamy wykładu prof. dr hab. Marcina Mierzejewskiego - pracownika Katedry Fizyki Teoretycznej WPPT.
//
//Zjawisko termalizacji występuje powszechnie w otaczającym nas świecie złożonym z
//obiektów makroskopowych. Chociaż obiekty takie mają ogromną liczbę stopni swobody,
//po dostatecznie długim czasie ich własności fizyczne określone są przez stosunkowo
//niewielką liczbę parametrów, takich jak temperatura, liczba cząsteczek, czy magnetyzacja.
//Pozostałe informacje o stanie początkowym takich układów są tracone w trakcie ewolucji.
//Ponieważ termalizacja układów makroskopowych jest nierozłącznie związana z utratą informacji,
//szczególnym zainteresowaniem w ostatnich latach cieszyły się układy kwantowe, które nie
//wykazują termalizacji. W tym kontekście badano układy, w których brak termalizacji wynika z
//dodatkowych praw zachowania, oraz takie, gdzie silny nieporządek jest przyczyną braku termalizacji.
//W trakcie wykładu zostanie omówiona hipoteza wyjaśniającą powody termalizacji typowych,
//makroskopowych układów kwantowych oraz wybrane własności tych układów, które jej nie wykazują.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/letni_2020-2021/24-03.png",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//W tym tygodniu będziemy gościć Konrada Klepackiego, który przeprowadzi wykład dotyczący zmian klimatycznych.
//
//O zmianach klimatu słyszał każdy. Ale jak one naprawdę działają? W
//ciągu 90 minut postaramy się przybliżyć fizyczne podstawy tego procesu, skalę tematu,
//reperkusje społeczne i ekonomiczne oraz możliwe rozwiązania. Wszystko zwięźle,
//przystępnie i interaktywnie.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/31-03.png",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Tym razem gościmy prof. dr hab. Józefa Sznajda z Instytutu Niskich Temperatur i B
//adań Strukturalnych z prezentacją \"Samoorganizacja: Piękna teoria fizyczna\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/07-04.png",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Tym razem gościmy prof. dra hab. Jacka Mulaka z Oddziału Badań Magnetyków
//Instytutu Niskich Temperatur i Badań Strukturalnych z wykładem \"O efekcie pola krystalicznego\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/14-04.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Tym razem gościmy prof. dra hab. Romualda Lemańskiego z Oddziału Teorii Materii Skondensowanej z
//wykładem \"Przejście metal-izolator w fazach uporządkowanych ładunkowo\".
//
//Przejście metal-izolator zostanie przeanalizowane w oparciu o przedstawiony w czasie referatu
//model Falicova-Kimballa. Następnie zostanie krótko omówiona metoda dynamicznego pola średniego,
//która pozwala na wykonanie ścisłych obliczeń zarówno w stanie podstawowym jak i w skończonych temperaturach.
//Uzyskane za pomocą tej metody gęstości stanów elektronowych (DOS) w fazie uporządkowanej ładunkowo
//zależą od temperatury.
//W swoim referacie zaprezentuję prosty układ elektronowy, który w pewnym zakresie temperatur T < T_{mi}
//jest uporządkowanym ładunkowo izolatorem, natomiast powyżej T_{mi}, przy czym T_{mi} < T_c
//(T_c jest temperaturą przejścia układu do fazy nieuporządkowanej) gęstość stanów elektronowych
//na poziomie Fermiego jest dodatnia, co interpretujemy jako stan metaliczny.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/clifford.jpg",
//    "des" => "Ruszamy z kolejnymi warsztatami!
//Tym razem jeden z członków koła, Konrad Bolembach, poprowadzi dla Was
//spotkania z Wprowadzenia do Algebr Clifforda.
//
//Warsztaty będą trwać 5 tygodni.
//Pierwsze spotkanie już w ten poniedziałek.
//
//Zapraszamy chętnych do zapisywania się w formularzu.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/21-04.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//Tym razem gościmy prof. dra hab. Tadeusza Kopcia z Oddziału Teorii Materii
//Skondensowanej z wykładem \"Kwantowa krytyczność w nadprzewodnikach
//wysokotemperaturowych jako efekt własności topologicznych\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/28-04.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmy prof. nadzw. dra hab. Zbigniewa Gajka z Oddziału Badań Magnetyków,
//który poprowadzi wykład \"Od pomiarów właściwości ciał stałych do ich rozumienia\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/12-05.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmyprof. nadzw. dr hab. Małgorzatę Samsel-Czekałę z Oddziału Teorii
//Materii Skondensowanej Instytutu Niskich Temperatur i Badań Strukturalnych, która
//poprowadzi wykład \"Wpływ topologii struktury elektronowej na unikalne właściwości
//fizyczne wybranych materiałów\".
//Wykład poświęcony jest podstawowym ideom oraz przeglądowi
//najnowszych badań teoretycznych oraz eksperymentalnych nowoczesnych materiałów o
//trywialnej lub nietrywialnej topologii struktury pasmowej elektronów czy też
//powierzchni Fermiego, która determinuje ich kluczowe właściwości fizyczne.
//Takim materiałami są m.in. izolatory i nadprzewodniki topologiczne oraz inne
//niekonwencjonalne nadprzewodniki, semimetale Diraca i Weyla, niekolinearne magnetyki,
//a także stopy o wysokiej entropii.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/letni_2020-2021/19-05.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmy dra hab. Macieja Winiarskiego z Oddziału Teorii Materii
//Skondensowanej Instytutu Niskich Temperatur i Badań Strukturalnych, który poprowadzi
//wykład \"Modelowanie własności termoelektrycznych materiałów: obliczenia z zasad pierwszych\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/26-05.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmy dra hab. Tomasza Zaleskiego z Oddziału Teorii Materii Skondensowanej
//Instytutu Niskich Temperatur i Badań Strukturalnych, który poprowadzi
//wykład \"Opis przemian fazowych na przykładzie bozonów w sieciach optycznych\".",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//$article = [
//    "img" => "img/news/letni_2020-2021/09-06.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą, Qubitem i Nanoresem!
//
//W tym tygodniu dr hab. inż. Katarzyna Roszak z Katedry Fizyki Teoretycznej PWr
// poprowadzi wykład \"Nie-Markowski szum w kropkach kwantowych na granicy morza Fermiego\".
//
//Abstrakt:
//Badany jest prąd tunelujący przez jednopoziomową kropkę kwantową w sytuacji, kiedy
//energia Fermiego jednego z przewodów jest porównywalna z energią poziomu kropki. W rezonansie rozpraszanie elektronów z przewodu na elektronie związanym w kropce prowadzi do ostrego maksimum natężenia prądu, które zanika potęgowo wraz z rosnącą różnicą energii między kropką i przewodem [1, 2]. Szum prądu wykazuje w tej sytuacji charakterystyczne zachowanie, którego nie da się wyjaśnić przy pomocy teorii w przybliżeniu Markova [3]. Pokazaliśmy, że uwzględnienie efektów pamięci [4] pozwala zrozumieć jakościowe zachowanie szumu, jak również zamodelować ilościowo faktor Fano.
//
//[1] G. D. Mahan, Phys. Rev. 163, 612 (1967).
//[2] D. A. Abanin and L. S. Levitov, Phys. Rev. Lett. 94, 186803 (2005).
//[3] N. Marie, F. Hohls, T. Lüdtke, K. Pierz, and R. J. Haug, Phys. Rev. B 75, 233304 (2007).
//[4] N. Ubbelohde, K. Roszak, F. Hohls, N. Maire, R. J. Haug, T. Novotny, Scientific Reports 2, 374 (2012)",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//
//
//$article = [
//    "img" => "img/news/letni_2020-2021/16-06.jpg",
//    "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmy dra Francisco José Pena Benitez, który poprowadzi wykład
// \"Electrons in magnetic fields\".
//
//Abstrakt:
//Electrons in a magnetic field organize in term of the so-called Landau levels.
//In particular, I will talk about the properties of relativistic and non-relativistic
//fermions in presence of an uniform magnetic field, and discuss the role of such an old
//problem for the understanding of topological matter, particle physics and fermionic fluids in general.",
//    "date" => "letni_2020-2021"
//];
//$results = $newsStore->insert($article);
//$newsStore->deleteById(1);
//$newsStore->updateById(32, [ "des" => "Zapraszamy na kolejny wykład z Nablą!
//
//Tym razem gościmy dra Francisco José Pena Benitez, który poprowadzi wykład
// \"Electrons in magnetic fields\".
//
//Abstrakt:
//Electrons in a magnetic field organize in term of the so-called Landau levels.
//In particular, I will talk about the properties of relativistic and non-relativistic
//fermions in presence of an uniform magnetic field, and discuss the role of such an old
//problem for the understanding of topological matter, particle physics and fermionic fluids in general." ]);
$allNews = $newsStore->findAll();

    print_r($allNews);

?>