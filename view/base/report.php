    <main class="main">
        <article class="article-main">
            <h1>Redovisningar</h1>
            <p>Här ligger alla redoviningar för kusen oophp.</p>
            <h2>Kmom01</h2>
            <p>Detta blev ett ganska omfattande kursmoment med rätt många uppgiften,
            övningar och annat material som skulle gås igenom. Resultatet för mig blev
            att jag valde att inte koda igenom övningarna då de hade tagit för
            mycket av min tid. Det var tillräckligt för mig att gå noga läsa igenom
            övningarna för att friska upp minnet (php20 och oophp20). Personligen
            tycker jag det blev för mycket i detta första kursmoment, och som jag ser
            i redovisningstråden såhär på söndag eftermiddag så tycker många detsamma.
            Det var precis jag hann med att göra uppgifterna, och då har jag suttit
            hela helgen. Jag hade ingen tid att läsa igenom atriklarna eller annat
            läsmaterial, utan det blev direkt på övningarna och sen uppgifterna.
            Jag hade väldigt gärna haft lite mer tid på mig för att noga gå igenom
            allting och ta in allt nytt - för mig tog det mer än 20 timmar att
            göra detta kursmoment och det är inte inklusive läsning. Så min personliga
            åsikt är att ni bör dela upp det bättre och överdriva med uppgifter i
            första kursmomentet där man också måste installera labbmiljö för båda kurserna.
            <br><br>
            Guessuppgiften fick ingen style, då jag hade lite problem med att få
            sessions att fungera (på grund av egen dumhet). Det var en nyttigt uppgift
            för att friska upp minnet och komma igång med PHP igen. Jag gjorde inget
            speciellt, bara följde strukturen som stod i uppgiften (så som jag har
            tolkat det i alla fall). Det är inget mästerverk men det fungerar.
            <br><br>
            Till Anax-lite valde jag att jobba med Makefiler och LESS som vi gjorde
            i designkursen, då jag gillar design och vill försöka hålla igång med
            LESS och Makefiler. Det känns nyttigt att ha koll på och det är dessutom
            kul att göra designen helt från scratch. Även om den än så länge inte
            är speciellt grym då jag inte hade mycket tid att lägga på det just i
            detta kursmoment. Jag kopierade över Makefilen från designkursen och
            installerade paketen från npm som behövs för att kopilera LESS.
            <br><br>
            Jag gjorde alla extrauppgifterna för Anax-lite (inte navbaren) då
            jag faktiskt redan hade gjort dem när jag först kollade. Jag har
            lagt till så att Cimage används för bilder. En view byline skapades
            som används på About-sidan. En flash-view som används på alla sidor
            under navbaren och en testsida som jag använde för att testa den nya
            navbar1.<br><br>
            Min navbar1 används nu på alla sidor och den är egentligen inget speciellt.</p>
            <h4>Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?</h4>
            <p>Kände lite "omg hur tusan kodar man med PHP" i början men det
            kändes bra sen. När vi kommer direkt från oo-python så känns det
            naturligt att jobba med klasser och objekt, så just det var inga problem
            alls att komma igång med. Jag märkte hur lätt det blev att komma igång
            med PHP igen efter att ha gått igenom övningarna. Kändes som att allt
            jag behövde göra var att skumma igenom dem och sen var man inne i
            PHP-kodning igen.</p>
            <h4>Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida.</h4>
            <p>Tyckte det var trevligt att få göra ramverket och inte få det helt
            färdigt. Man får bättre koll på hur det fungerar, hur det är uppdelat och
            var man ska lägga sin kod. Jag hade dock gärna gått in och analyserat
            filerna i ramverket lite mer och gjort egna ändraingar/förbättringar,
            men som sagt så var det ganska ont om tid så det får bli i kommande moment.
            Men Anax-lite verkar bra och lätt att ha med att göra, och det var
            mycket kul att komma igång med även om det tog sin lilla tid.
            <br><br>
            Alla krav är implementerade, första sidan, about, report finns plus
            testsidan och en route "/status" som jag gjorde i övningen, som returnerar
            ett JSON-objekt. "Diverse detaljer om ditt system" är inte väldigt specifikt,
            så jag bara antog att det är samma som i övningen.
            <br><br>
            Navbaren gjorde jag från en key-value array som loopas igenom och lagrar
            html-koden i en variabel som jag använder i vyn. För att sätta en
            active klass skickar jag bara med en variabel från routern - det var
            inget speciellt krav på just detta så jag har tid att förbättra det i
            senare kursmoment.<br><br>
            Som sagt gjorde jag designen med LESS. Det är inget mästerverk men
            jag ser det som något vi kan jobba på genom hela kursen - så det finns
            tid för förbättringar sen. Dock är jag nöjd med den stilen jag har just
            nu. Testa lite andra färger än vad jag brukar, ett litet annorlunda tema.
            Det blev snyggt och enkelt tycker jag. I allmänhet är jag hittills
            mycket nöjd med min me-sida, speciellt med tanke på tidspressen.</p>
            <h4>Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?</h4>
            <p>Det gick bra, inga konstigheter. Jag gjorde till uppgift 9, men
            vilket kanske är lite mer än en tredjedel. Kände att jag hade bra koll
            på det och kom ihåg mycket från SQL labben vi hade i htmlphp. Jag kommer
            ihåg mycket från den vilket gjorde det super lätt att komma igng med
            MySQL i Workbench. Annars har jag ingen erfarenhet med MySQL.<br><br>
            Jag valde att jobba i localhost då jag har varit iväg lite och inte
            alltid suttit på ett stadigt nätverk, så det kändes säkrast att köra
            i localhost. Kanske gör om det snabbt på BTHs server nästa vecka då
            jag tycker det känns bättre när man kör mot en riktig server. Man känner
            sig lite coolare då.</p>
            <h2>Kmom02</h2>
            <h4>Hur känns det att skriva kod utanför och inuti ramverket, ser du fördelar och nackdelar med de olika sätten?</h4>
            <p>Det var lite svårt att hänga med först, men känner att jag börjar
            få koll på hur man kan jobba inne och utanför ramverket. En fördel med att
            integrera något i ramverket är att koden kan användas direkt i vyerna -
            t.ex. jag valde att lägga mitt Session-objekt i index.php som låter mig
            använda sessionen i alla mina vyer hur jag vill, vilket är väldigt smidigt.
            Så när det gäller kod som kan återanvändas i många eller alla vyer så kan
            det vara en okej idé att lägga den i ramverket. Annars är det kanske bättre
            att lägga det utanför.<br><br>
            Jag har skrivet en hel del php direkt i mina vyer men egentligen vill
            jag fortsätta att hålla mina vyer så rena som möjligt - alltså att de bara
            innehåller informationen som ska presenteras och inte skapa information.
            När jag får mer tid tänker jag flyttade tillbaka den koden från vyerna till
            t.ex. config-filer eller liknande. Jag har bara inte haft tid för det än,
            men det är så jag vill ha det.<br><br>
            Men på grund av detta är jag inte riktigt igång med "var kan jag lägga koden",
            så jag har inte mycket mer att säga om just detta.</p>
            <h4>Hur väljer du att organisera dina vyer?</h4>
            <p>Jag har än så länge inte lagt mycket tid och tanke bakom detta.
            Alla mina vyer ligger under view/views utan några andra mappar. Igen,
            detta är en sån sak jag inte riktigt haft tid att greja med, då all
            tid går till det som uppgifterna kräver. Jag har dessutom valt att inte
            skapa navbar1 eller navbar2 mappar då jag bara uppdaterar min navbar och
            det finns ingen anlending att spara en gammal navbar. Dock försöker
            använda så få vyer som möjligt - t.ex. använder jag bara en vy till
            alla mina session routes, då jag tycker det blir bättre och renare.
            Session innehåller inte så mycket information att alla routes behöver
            egna vyer, speciellt när många routes bara redirectar tillbaka.<br><br>
            Men om vi börjar jobba mer med undersidor så kommer jag börja skapa
            fler mappar för vyerna, men för tillfället känner jag att det är inte helt
            nödvändigt. Om en mapp ska skapas ska den kunna innehåller fler än en
            vy för att det ska kännas nödvändigt, tycker jag.</p>
            <h4>Berätta om hur du löste integreringen av klassen Session.</h4>
            <p>Som sagt skapade jag session-objektet i frontkontrollern så den
            kan nås via $app. Jag valde också att start sessionen direkt i frontkontrollern
            så den alltid är startad i all vyer. Själva Session-klassen ligger under
            src/Session/Session.php och jag tog hjälp av övningen för att skapa
            den.<br><br>
            Sessionen testas med hjälp av session.php. Vad session.php visar beror
            på routen, då detta är min enda vy för hela session-uppgiften. Jag skapade
            en session.php under route som innehåller mina routes for sessions undersidor.
            Direkt i routern haterar jag destroy, set, get, dump och annat av session,
            och även redirects via $app->response->redirect. På så sätt behöver jag
            bara en vy som uppdaterar sin information beroende på route. Det finns
            inte mycket anledning till fler vyer.</p>
            <h4>Berätta om hur du löste uppgiften med Tärningsspelet 100/Månadskalendern, hur du tänkte, planerade och utförde uppgiften samt hur du organiserade din kod?</h4>
            <p>Jag valde att göra månadskalendern då det kändes mest användbart.
            Håller det enkelt med två klasser, Calendar och Month. Calendar tar
            emot två parametrar, $month och $year, och utifrån dem skapas månaden
            som sedan används för att skapa kalendern för den månaden. Jag skapar
            alltså Calendar-objektet direkt i vyn calendar.php. Månaden och året som
            skapas är nuvarande by default, men om man klickar på knapparna
            "Next month", "Next year" i vyn används GET för att öka värdet på månaden.
            Och det värdet skickas då med när Calendar-objektet skapas igen när sidan
            laddas om. Om månad går från December till Januari eller på andra hållet
            så ändras också året.
            <br><br>
            Så Calendar-klassen innehåller ett Month-objekt, och jobbar huvudsakligen
            med att skapa HTML för själva kalendern. Month-klassen innehåller all
            information om månaden, och har även koll på föregående månad för att
            skriva ut datum för den i kalendern (med en annan färg och lite mindre
            font, då de tillhör en annan månad). Jag hade nite denna strukturen från
            början, för jag hade allting i Calendar först. Men jag tyckte det blev
            lite rörigt och det blev mycket bättre om jag skapade månaden i en egen
            klass. Jag tog mycket hjälp av internet för själva koden som skapar
            datum osv men jag har skapat min egen kod och struktur som jag är nöjd med.
            <br><br>
            Så egenligen planerade jag inte koden från början då jag inte helt visste
            hur jag skulle skriva koden. Så jag jobbade med att organisera koden
            under tiden jag jobbade. Jag är inte helt nöjd med hur jag löste det,
            men jag höll det enkelt och gjorde vad jag kunde med den begränsade
            tid jag hade. Så med tanke på det är jag nöjd.</p>
            <h4>Några tankar kring SQL så här långt?</h4>
            <p>Inte mycket att säga, det har gått bra än så länge. Jag har gjort
            till och med uppgift 12 och har inte haft några problem alls. Mycket
            känns igen från HTMLPHP kursen men det är väldigt nyttigt att ha
            en rejäl genomgång av det igen.</p>
            <h2>Kmom03</h2>
            <h4>Hur kändes det att jobba med PHP PDO, SQL och MySQL?</h4>
            <p>Lite rörigt i början men annars kul och inga särskilda problem. Har
            länge viljat börja med MySQL så det är absolut kul att komma igång med,
            speciellt när vi får använda det till ett inloggningssystem. PDO och
            SQLite har vi tidigare använt i PHP så det kändes bekvämt att jobba med
            databaser i PHP allmänt. Det kluriga var att få till det i ramverket
            genom klasser osv.</p>
            <h4>Reflektera kring koden du skrev för att lösa uppgifterna, klasser, formulär, integration Anax Lite?</h4>
            <p>Det blev många vyer då jag följde övningen till stor del i början,
            och det gillar jag inte riktigt. Jag hade säkert kunna skippa några vyer
            och lägga den koden direkt i routern eller liknande. Men det får bli vid
            senare tillfälle då det inte verkar finnas någon tid till det nu.
            <br><br>
            Det blev då också många nya routes så jag skapade två nya mappar under
            route, "admin" och "users". Jag delade upp mina vyer på samma sätt -
            då har jag koll på exakt vad som är admin-gränssnittet och inte. Blir
            lätt att hantera tycker jag.
            <br><br>
            Till uppgifterna skapade jag tå nya klasser, en för koppling till
            Databas och en för hantering av användare. Blev nöjd med det då det
            blev en bra uppdelning av koden och gör det mycket lättare att hantera
            datan i databasen. Users klassen använder sig av databasobjektet för
            kommunicera med databasen genom $app.
            <br><br>
            Vyerna fick dock ändå ganska mycket PHP-kod, och jag hade gärna jobbat
            på detta - finslipat lite - men det finns helt enkelt inte tid till det
            vilket är tråkigt... Bland annat blev det lite rörigt med alla formulär
            som ska hanteras genom processingsidor. Jag visste inte riktigt hur jag
            skulle göra det bättre men det får bli någonting jag tittar närmre på
            under kursens gång.
            <br><br>
            Jag nöjde mig med en tabell i databasen med begränsat antal kolumner
            (namn, lösen, roll). Men det blir ju bra till det vi har gjort hittills.
            Rollen kan vara "user" eller "admin" - det är alltså där man ser om
            en användare är admin eller inte. Om en användare är rollen "admin"
            så finns en länk på deras profil, "Admin page" som tar en till
            en tabell med alla användare. Och därifrån kan administratören redigera
            användarnas namn, lösenord, roll och även lägga till och ta bort användare.
            Jag använder mig av en cookie för att spara användarens roll, och den
            visas högst uppe på profilsidan.
            <br><br>
            Vill ni komma åt admin-sidorna kan ni logga in med "admin" username
            och "admin" lösenord. Han ger er tillgång till gränssnittet.</p>
            <h4>Känner du dig hemma i ramverket, dess komponenter och struktur?</h4>
            <p>Jo, det tycker jag nu. Absolut. Jag gillar verkligen sättet vi kan
            jobba med $app både i klasser och vyer, det underlättar otroligt mycket.
            Och själva strukturen känner jag mig hemma i ny. Det är inget problem
            att hitta saker eller veta vart man ska lägga sin kod. Känns so att
            allting har sin plats och det känns bra.</p>
            <h4>Hur bedömmer du svårighetsgraden på kursens inledande kursmoment, känner du att du lär dig något/bra saker?</h4>
            <p>Svårighetsgraden i sig har varit helt okej. Det är belastningen som
            gör det lite jobbigare. Det är väldigt mycket som ska göras på ganska
            lite tid. Inte bara ska vi koda uppgifterna utan koden ska vara snygg,
            bra uppdelad och webbsidan ska vara stylad och se fin ut. Själva grejerna
            kanske inte verkar vara så stora i sig, men när vi ska lägga in dem
            på vår sida så tillkommer en hel del jobb. Det blir för mycket helt enkelt.
            För min del blir det bara värre när det är så mycket som ska hinnas med,
            man får prioritera och lägga vissa saker åt sidan istället för att kanske
            fördjupa sig lite i det man gör och få bättre förståelse för det. Jag
            känner att jag lär mig saker och det är bra saker, men jag lär mig inte
            så mycket som jag skulle vilja eller som kanske är tanken. Det blir stressigt
            vilket oftast betyder att koden blir slarvig. Det är tråkigt när man
            vill spendera lite mer tid på att finslipa och kanske fördjupa sig lite
            i det man gör, men inte kan på grund av tidsbrist. I dessa första
            kursmomenten har det också funnits massiva övningar som ska jobbas
            igenom och 3-4 uppgifter on top of that. Vet inte riktigt hur ni tänkte
            där men det blir för mycket helt enkelt.</p>
            <h2>Kmom04</h2>
            <h4>Finns något att säga kring din klass för texfilter, eller rent allmänt om formattering och filtrering av text som sparas i databasen av användaren?</h4>
            <p>Jag valde att ta CTextFilter klassen via composer require och bygga på
            / ändra själv där det behövdes då det kändes enkalst med tanke på att
            det fanns mycket annat som skulle göras. Formattering av text sker innan
            den skrivs ut på webbsidan men det hade nog egentligen varit bättre om
            det skedde innan den läggs in i databasen. Då hade jag bara behövt den
            koden på ett ställe istället för att upprepa den. Det är sånt man vill
            sitta och fixa till nu när man inte har tid...</p>
            <h4>Berätta hur du tänkte när du strukturerade klasserna och databasen för webbsidor och bloggposter?</h4>
            <p>Strukturen på databasen har jag gjort helt baserat på övningen
            i kursmomentet för att vara säker på att allt blev rätt och jag inte
            missade något. Mycket av min kod skrivs direkt i vyerna då det kändes enklast
            i början (för att se till att allt funkar som det ska). Jag brukar gilla
            snygga till koden i efterhand när jag vet att det jag skrivit funkar bra,
            men det finns ju ingen tid för det nuförtiden så det blir helt enkelt en
            ganska rörig struktur på allting. Jag försöker dela upp vyer och router
            kod på ett logiskt sätt men resten blir ganska rörig. Det ligger lite kod
            i src/functions men inte alls så mycket som skulle behövas. Jag använder
            min databas klass från tidigare och skriver för det mesta SQL-koden direkt
            i vyerna. Som jag gjorde denna veckan får jag helt enkelt finslipa och
            fixa koden i efterhand med tanke på att det är så omfattande kursmoment.</p>
            <h4>Förklara vilka routes som används för att demonstrera funktionaliteten för webbsidor och blogg (så att en utomstående kan testa).</h4>
            <p>De är väldigt enkla men bloggen hittas via "/blog", pages hittas via
            "/pages" och block hittas via "/block". Länk till bloggen finns i navbaren,
            de andra måste skrivas in direkt i urlen. Vad de visar är väldigt begränsat
            just nu med de demonstrerar att det faktiskt fungerar. I min route
            "/test" testar jag lite olika testfiltreringar (nl2br, bbcode, link samt markdown),
            som stod i uppgiften.</p>
            <h4>Hur känns det att dokumentera databasen så här i efterhand?</h4>
            <p>Det känns vettigt även om det inte är så mycket just nu... Men ibland
            känner jag att jag behöver gå in i databasen för att friska upp minnet
            om vad som verkligen finns där, och då kan det vara bra att ha det dokumenterat.
            <br><br>
            Menar ni själva ER-modellen så känns det bra och det var enkelt att göra med
            hjälp av MySQL Workbench. Jag valde att exportera den till en PNG direkt
            (istället för att ta en snapshot). Filerna sparade jag i både kmom04/er1 och
            anax-lite/sql.</p>
            <h4>Om du är självkritisk till koden du skriver i Anax Lite, ser du förbättringspotential och möjligheter till alternativ struktur av din kod?</h4>
            <p>Ja absolut, och det sa jag innan. Det finns många, många möjligheter och
            önskar enormt mycket att jag hade tiden att sitta och göra förbättringar.
            Jag tycker det är riktigt coolt med en snygg struktur och snygg kod, men
            jag kan inte få till det bra när vi ligger under så mycket press och
            stress. I början av denna veckan gjorde jag stora förbättrningar på
            koden från föregående veckor, och den strukturen blev jag riktigt nöjd med.
            Gjorde bland annat en "renderDefaultLayout" till min router som städade upp
            mycket skräp där, och skapade dessutom min src/functions som har fått
            några funktioner som bland annat kollar om man är inloggad, admin eller
            om $_POST är aktiv. Dock känns det som att det blev skräp av allt igen efter
            denna veckan, men kommer att fortsätta göra förbättringar efter hand.
            <br><br>
            Finns mycket coolt man kan göra när det gäller koden och strukturen,
            nu vill man bara få tid och möjlighet att jobba på det.</p>
            <h2>Kmom05</h2>
            <h4>Gick det bra att komma igång med det vi kallar programmering av databas, med transaktioner, lagrade procedurer, triggers, funktioner?</h4>
            <p>Det var väldigt svårt och jobbigt att komma igång. Det var väldigt mycket nytt
            att ta in och uppgiften kändes bara enorm. Jag ville ta den färdiga
            koden för webbshoppen men jag förstod inte tillräckligt för att kunna
            ta den och jobba utifrån den (allting kändes bara överväldigande just då,
            med transactions, procedures, triggers, functions, en hel webbshop...).
            Då kändes det bättre att bara börja
            från början på egen hand, vilket jag nu inser var både bra och dåligt.
            Det var bra på så sätt att jag lärde mig väldigt mycket om hur man kan
            programmera i databasen, men det tog ju lite extra tid eftersom jag
            började från scratch. Dessutom blev inte allting som kanske var tänkt,
            bland annat har jag inget table för inventory, utan detta hanteras direkt
            i produkterna. Men uppgiften är inte heller så specifik om hur det skulle göras
            så då är det ju fri tolkning. Dock hade jag hellre haft denna uppgift
            som bara ren SQL-kodning utan CRUD delen som bara blev en time waster.
            Vi har gjort mycket CRUD de senaste veckorna - vi vet hur det funkar nu.
            <br><br>Dessutom kändes det som vi direkt hoppade från ganska enkel
            SQL-kodning till en massa tables med procedures och allt vad det heter.
            Därför blir det mycket överväldigande när man börjar på detta kursmomentet,
            även om det finns mycket kod redo. </p>
            <h4>Hur är din syn på att programmera på detta viset i databasen?</h4>
            <p>Jag gillar att hålla så mycket kod som möjligt i backenden. Det är
            skönt att bara kalla en procedure i PHP-koden när man vill göra något,
            istället för att behöva skriva inserts eller updates. Jag gjorde procedures
            till CRUD delen viket jag tycker blev riktigt bra. Blir snyggare PHP
            kod också.<br><br>
            När jag hade kommit igång med allt det nya så var det faktiskt grymt
            roligt att sitta och programmera i databasen. Det är kul att testa på
            lite nytt och inte bara sitta och koda formulär hela dagarna. Även om det
            var mycket nytt så tycker jag alltid det är kul att testa och leka
            runt med något nytt.</p>
            <h4>Några reflektioner kring din kod för backenden till webbshopen?</h4>
            <p>Jag skrev väldigt många procedures i mitt SQL API för att slippa skriva
            inserts och så i PHP-koden. Annars är det inget speciellt. Det var mycket
            att hålla koll på när det gällde kundvagn, hur den ska vara kopplad till
            en kund, hur man ska skapa och "arkivera" ordrar osv. Och jag lärde mig
            mycket samtidigt som jag gjorde uppgiften, vilket betyder att jag nu i slutet -
            när jag inte har tid att göra fler ändringar - inser att jag hade kunnat
            göra många saker bättre. Men hela poängen är ju att vi ska lära oss
            så den delen känner jag att jag har lyckats med och SQL-koden är ju
            den bästa jag har skrivit hittills så är ändå väldigt nöjd med det
            som hunnits med under kursmomentet. Jag tog tiden att skapa procedures
            för att det skulle bli snyggare och lättare att testa och använda,
            så just den biten är jag stolt över. Om koden verkligen funkar så bra
            i verkligheten (via en front-end alltså) är en annan fråga. Huvudsakligen
            är jag orolig över att den inte ska fungera så bra om flera kunder
            samtidigt lägger till och tar bort objekt i sin kundvagn. Det fungerar
            bra när jag testar i databasen men som sagt så vet jag inte 100% om det
            blir bra i verkligheten - hade säkert kunnat göra det bättre. Dock var
            detta inget listat krav i uppgiften - verkar som att jag bara hade kunnat
            en "global" kundvagn för alla användare, då det bara var ett krav att
            själva kundvagnen skulle fungera.<br><br>
            Det kändes lite oklart för mig hur man kunde göra med
            inventory och "lagerstatus". Jag valde att tolka "lagerstatus" som
            antalet produkter tillgängliga. Det blir alltså mitt inventory som
            ligger som en kolumn för varje produkt. Det kändes lättast att göra
            så men exemplet visar ett annat sätt som förmodligen är bättre. Poängen
            är att det verkar som att man förlorar mycket på att inte använda kod
            från exemplet. Så kände jag i alla fall. Men uppgiften var ju ganska
            fri i hur vi valde att modellera databasen, och jag har gjort på mitt
            eget sätt (för det mesta) och det verkar funka så i allmänhet är jag
            nöjd.</p>
            <h4>Något du vill säga om koden generellt i och kring Anax Lite?</h4>
            <p>Det finns mycket som säkert kan göras bättre, och jag vet att
            där finns mycket kod som kan förbättras från tidigare kursmoment. Koden
            till CRUD delen i detta kursmoment kopierade jag i stort sätt bara från
            andra delar av webbplatsen. Bland annat en del kod som jag hade kunnat göra
            bättre genom funktioner i src/functions. Men det blir som det blir. Koden
            är rörig men det funkar. <br><br>
            En sista sak jag vill säga som är lite off-topic men måste sägas är
            att dbwebb publishfast inte är fast när man får en jäkla massa varningar
            och errors från node_modules mappen (när man jobbar med LESS). Jag vill
            inte sitta och jobba i localhost eftersom det många gånger för mig
            innebär att vissa saker jag trodde var klara och fungerade inte fungerar
            på studentservern. Istället känns det bättre att testa allting direkt
            på studentservern - speciellt eftersom jag tror den kör en äldre version
            av MySQL än vad jag har på localhost. Men då blir det extremt irriterande
            att behöva sitta och vänta på att dbwebb skriptet ska gå igenom alla
            meningslösa errors. Dessutom får jag nu valideringsfel på, ja, i stort
            sätt allting i doc mappen. Blir väldigt lätt att misssa "riktiga"
            errors då.</p>
            <h2>Kmom06</h2>
            <h4>Vad du bekant med begreppet index i databaser sedan tidigare?</h4>
            <p>Nej inte alls, detta är helt nytt för mig precis som mycket annat
            när det gäller databaser. Dock har jag använt primär nyckel till nästan
            alla mina tables men detta var mest för att göra en rad lättåtkomlig,
            tänkte jag. Visste inte att detta också undviker en full table scan,
            så det var intressant att lära sig.<br><br>
            Det kändes inte svårt att begreppa men verkar som att det kan göra
            hyfsat stor skillnad i en större databas. I allmänhet känns det som
            jag nu har bättre förståelse för hur databaser fungerar.</p>
            <h4>Berätta om hur du jobbade i uppgiften om index och vilka du valde att lägga till och skillnaden före/efter.</h4>
            <p>Jag hade redan primära nycklar i alla mina tables så det var lite klurigt
            att komma på var man kunde lägga till index. Jag började att kolla var jag
            använder bland annat WHERE, men även det var svårt då jag har använt
            UNIQUE på t.ex. usernames och PATH och SLUG i mitt content table. Dock
            använder jag "type" från mitt content table mycket, så då kunde jag göra
            ett index där tänkte jag.<br><br>
            Jag gjorde en EXPLAIN SELECT * FROM content WHERE type = "page", vilket
            visade en full table scan på 8 rader. Det ska ju inte behövas, så
            då gjordes en CREATE INDEX på content(type) som skapar ett index
            "index_type". Nu borde det vara bättre, så testade att köra en EXPLAIN
            SELECT sats igen och då visar den att den har gjort en scan på två
            rader istället för 8. Det känns ju bra, eftersom detta är något som
            används i bloggen och de andra sidorna som visar content. Nu när vi
            laddar dem sidorna behöver vi inte göra en full table scan varje gång.
            Vårt content-table är något som skulle kunna växa ganska mycket om
            vi hade en större sida med aktiv blog osv, då är det bra att vi
            optimerar den på det här sättet.<br><br>
            Resten gjorde jag i min webshop. Till en början gjorde jag namnet på produkter
            unika. Tänkte att man inte bara ska kunna använda id men också namn för
            att ta fram datan för en produkt. Det känns bra och relevant. Tanken här var
            att optimera för en eventuell sökfunktion där man kan söka på namnet av
            en produkt. Nu om man söker t.ex. "ASUS%" så behöver den bara besöka
            en rad för att få fram resultatet, istället för alla. Det är bättre.
            Ännu bättre hade det kanske blivit med hjälp av FULLTEXT, men jag vågade
            inte riktigt att köra på det. Så detta duger för tillfället. Ett tredje
            index la jag till i mitt Order table på kolumnen order_number. Order
            innehåller alla ordrar som har gjorts, och meningen är att man ska kunna
            ta fram en order baserat på dess ordernummer, och inte id. Därför kändes
            detta som ett väldigt bra ställe att skapa ett index. I en webshop kan
            antalet ordrar bli extremt högt. Då vill vi inte att alla rader ska
            besökas varje gång vi vill ta fram en order - det är inte optimalt.
            Med ett index på order_number fixar vi detta så den istället bara
            besöker relevanta rader - det blir mycket bättre.<br><br>
            Jag skapade också index på Cart(prod_id) och Cart(customer), då
            dessa används i min databaskod, men de blir inte lika relevanta då
            jag huvudsakligen använder views med joinade tables. Ville bara testa
            lägga till lite mer index där de kunde kännas relevanta.</p>
            <h4>Har du tidigare erfarenheter av att skriva kod som testar annan kod?</h4>
            <p>Ja vi gjorde ju detta lite i oopython-kursen och det kändes väldigt
            bekant. Kom in i det direkt utan några problem alls. Riktigt bra att
            man också kan se kodtäckning i procent.</p>
            <h4>Hur ser du på begreppet enhetstestning och att skriva testbar kod?</h4>
            <p>Det är mycket användbart och jag tror jag är en av de personerna
            som faktiskt tycker det är kul att försöka uppnå bra kodtäckning.
            När jag ser att resultatet är grönt på 100% så tänker jag "min kod är
            riktigt grym nu". Och jag gillar grym kod. Så jag ser det så är
            testbar kod bra kod, så om man lyckas komma över 70% har man skrivit
            bra kod. Dock är min kod inte jättebra, vilket leder mig till nästa punkt.</p>
            <h4>Hur gick det att hitta testbar kod bland dina klasser i Anax Lite?</h4>
            <p>Det var lite klurigt att hitta en bra klass att göra tester på. Majoriteten
            pratar med databasen eller har andra beroenden, vilket gjorde det svårt. Jag
            började skapa tester till min Session-klass men insåg att det inte skulle
            gå att starta en session. Då körde jag faktiskt på min Cookie-klass istället,
            då den är ganska lik. Dock blev det väldigt lätt så jag testade att göra
            tester för min Calender-klass också. Dock var det inte lika lätt eftersom
            den använder mycket echo för att skapa HTML via funktioner, och det blir
            svårt att testa. Jag uppnådde så hög kodtäckning jag kunde där, vilket
            inte ens var grönt, och nöjde mig med det. Nu såhär i efterhand inser jag
            att jag hade kunnat göra tester på Textfilter-klassen, men av någon anlendning
            hade jag helt glömt bort den. Dock tog jag den klassen från exemplet och
            jag vill hellre göra tester på något jag har kodat själv, så det blev
            bra såhär ändå.</p>
            <h2>Kmom07/10</h2>
            <p>Text kommer här.</p>
        </article>
    </main>
