---
title: "Reports"
class: "report"
...
My reports
=========================

### Kmom 01

Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.

Under föregående skolår så lärde jag mig otroligt mycket php. Tidigare på gymnasiet snuddade jag bara vid backend då jag i grupp skapade ett ärendehanteringssystem med ett simpelt back och frontend. Även admin och användargränssnitt. Även om det inte var särskilt bra kod eller säkert så var det en bra bred start för mitt lärande av php. Nu kan jag skriva objekt orienterad php dugligt och känner mig duktig på att kommentera och göra min kod tydlig. Jag ser ofta att jag återkommer till gammal kod och då blir det ibland svårt att förstå jag jag skrivit. Något som jag har börjat greppa bättre och bättre är PDO. Även om jag inte kan skriva koden själv så vet jag vad allt betyder och jag förstår hur jag ska koppla formulär till en databas. Jag har sedan ett tag tillbaka velat starta en egenbyggd blog och genom att få en bättre förståelse för PDO hjälpte det mig att komma en bit på min blog. Jag tycker det är svårt att hantera information som ska skickas vidare till nästa sida beroende på vad man trycker på med hjälp av GET och parameter. Det fungerar smidigt där det handlar om en variabel men när det handlar om till exempel ett helt blog inlägg blir det krångligare. Jag tror att det är samma princip och med hjälp av googlande och stackoverflow, brukar det lösa sig.
Jag tycker säkerhet är otroligt viktigt på en sida. Efter Mikael (mos) visade hur någon hade hackat honom blev jag nästan paranoid. Alla mina sidor fram tills dess hade inte någon som helst säkerhet. Ibland krävs det fakta och nära bevis för att jag ska reagera. Jag kan vissa åtgärder för att göra mina sidor med säkra men inte alls så mycket som jag skulle vilja. Eftersom jag gärna vill skapa min egna sida inom snar framtid så är detta något jag måste lägga mycket vikt på.
Try catch exceptions är också något jag gjort men som jag vill lära mig skriva mer flytande. Det gör det så otroligt mycket smidigare att felsöka och göra sidan säkrare med hjälp av exceptions.



Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?

2014:
	•	Laravel
	•	Phalcon
	•	symfony2
2017:
	•	lavarel
	•	code igniter
	•	symphony

Efter att ha kollat in [medium](https://medium.com/@elitechsystems/the-most-popular-php-frameworks-in-2017-a90a1189405e) så är Laravel fortfarande ett ledande ramverk. De utpekade fördelarna med detta ramverk är:
Ramverket enkelt hanterar tredjehands moduler, alltså man kan importera sina egna och andras moduler från andra ramverk.
Även autoloader för alla klasser. Unit testing finns även så man kan testa om den kod och klass man skrivit fungerar som den ska nu och i framtiden. Det ska även ha ett databashanteringssystem för att lättare uppdatera information ofta.

Code Igniter är känt för dess community och inkluderade bibliotek, moduler och färdiga templates. Något som verkade intressant är att det finns möjlighet för caching på serversidan.
Det är smidigt som de flesta stora ramverk och ska passa nybörjare som grymma guru programmerare men som sagt så har den även många bra tillägg.

Symfony finns i tre olika versioner. Just nu verkar det ändå vara version 2 som stiger i popularitet då det är väldigt “standard” och simpelt. Du kan köra de vanligaste sakerna som ett ramverk ska kunna. Det är mest älskat hos programmerare som gillar terminalen.
Även kikat på [coderseye](https://coderseye.com/best-php-frameworks-for-web-developers/) och [archer-soft](http://www.archer-soft.com/en/blog/top-7-best-php-frameworks-2017) och även här så stämmer ovanstående information. På den sista länken så skilde sig platserna lite. De var alla fortfarande på top 5 men här tog cakePHP topplasten.
En av dess bästa funktioner är att det är riktat mot att skapa säkra hemsidor. Ramverket hjälper till att skydda mot input validering och cross-site scripting (injectar information som används av andra användare).


Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.


Från att bara ta från mina egna erfarenheter så tycker jag att communities är något otroligt bra. Jag är co-owner av en community kallad Sockertoppar. Just nu ligger vi på ca 30 medlemmar men jag vet att vi ofta får besökare och andra användare som använder vår Teamspeak server. Jag hoppas på att vi ska kunna öka så mycket som möjligt, och kanske bli globala! Det är bara önsketänd, men kanske?
Fördelar med en community är att man alltid har någon att diskutera saker med eller i vårt fall, ha någon att spela med. Jag tycker att man får en känsla av att aldrig vara ensam. Man är samlad och gör något tillsammans, vilket även gör att man övar på samarbete. Utan att ha någon som helst bakgrundskoll på opensource communities så ser jag både fördelar och nackdelar med detta. Några bra saker är att man får många människor och inputs från olika ställen som tillsammans skapar ett bra program. Om jag till exempel har en ide för hur php språket skulle kunna uppdateras på ett bra sätt, så kan jag driva detta och förhoppningsvis få det tillämpat och fler ser det som en bra ide.
Dåliga saker är att eftersom det inte finns några pengar bakom ändamålet så kan det lätt gå i stå. Vi alla måste leva och om man redan har ett annat jobb blir det lätt att man prioriterar det istället. Att koden är opensource är grymt som jag nämt ovanför för att många kan hjälpa till, men det är även lätt för någon att kopiera koden och starta på ett liknande program på annat håll.


Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?

Prataren i videon lägger fram tanken att man inte ska behöva ha ett ramverk där man importerar moduler. Utan att när du skapar dina applikationer så ska man kunna leta bland alla bibliotek och använda de moduler som du vill, utan att vara bunden till något.
Jag tycker tanken låter väldigt bra. Det hade varit så smidigt att inte behöva tänka “undra om denna modulen fungerar tillsammans med denna modulen även om de tillhör två olika ramverk”. Jag tror att möjligheten till en “perfekt sida” hade varit lättare att uppnå.
Det jag tror man fortfarande behöver är något man bygger allt på. Det ser svårt ut att bara kunna öppna ett tomt dokument för att sedan importera massvis av moduler. Jag hade velat se en otroligt enkelt grund, som man som programmerare börjar på, kanske bara ett katalog träd med ytterst få filer såsom content och htdocs och moduler. Därefter kan man ladda ner alla de moduler man vill använda, lägga in dem i mappen och nå dem smidigt och enkelt. Även om det är det vi rör oss mot så är det alltid svårt att få med 100% av alla användare. Det kommer alltid finnas de som är nöjda med vad som finns och det som man känner sig varm i. Jag håller med dem, men finns det något smidigare alternativ till vad man använder, så är jag alltid intresserad.

Hur gick dina förberedelser inför kommentarssystemet?
Jag rör mig runt på väldigt många olika “kommentarsbaserade sidor” såsom Facebook, instagram, bloggar, sweclockers, youtube osv. Även om huvud målet med sidan inte är kommentarerna så är möjligheten att kunna kommentera viktigt. Så jag känner att jag har en god grund i vad ett kommentarssystem innebär. Jag har ett par gamla filer på mitt tidigare försök till en blogg som jag kikade runt på. Jag gillar designen och även hur det fungerar kodvis. Att ha en blogg har alltid varit ett projekt som jag velat göra. Det går att använda sidor så som vsco.com men då blir det inte precis som jag vill. Jag har fått för mig att allt som är möjligt att göra själv, vill jag göra själv. Till exempel saker som bilder till hemsidor. Jag vill inte behöva använda andras bilder om jag inte måste, så därför köpte jag mig en kamera så jag kan skapa egen media. Jag är dock osäker på om det är det jag vill göra som projekt. Därför kommer idéer bollas lite fram och tillbaka på vad som kan vara roligast och mest användbart att göra. Det lutar dock mot en blogg.


En kort notis om min design. Eftersom layouten inte fungerade med den intrigerade layouten i anax, så måste den filen göras om. I detta kursmomentet så satsade jag inte så mycket tid på designen, så den kommer fixas längre fram!

### Kmom 02

Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med
kontroller/modell-begreppet, så som du ser på det?

Jag har innan denna kursen snuddat vid begreppet i kursen oophp. Även om jag inte ännu är klar med kursen, så hann jag börja få en liten förståelse om vad de olika delarna handlade om och vilken kod som skulle ligga var.
För att förstå mer om MVC läste jag artiklarna som var upplagda i kursmomentet, men jag har även kikat på korta videos på youtube där det är en sammanfattning av Model, view och control. Jag förstår upplägget med MVC och tycker idén är bra, men jag har själv svårt att skriva i det. Det som är bra är att man får en bra struktur i koden, så att du enkelt kan ändra (även för andra) i en fil utan att behöva leta i flera. Som jag nämnde med strukturen så har du till exempel bara html och css (och variabler) i view och själva backend i model med mellanhanden controller.


Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?


Solid var lite svårare att förstå, med tanke på att själva meningarna var mindre tydliga (enligt mig). Tanken är att man ska tänka på ett speciellt sätt när man skriver objekt orienterad kod. Till exempel den första “Single responsibility principle” så ska en “klass” bara ha en funktion (ish). Var jag förstår så ska man försöka hålla en klass till bara en “lösning”. Så om du har en klass som löser två problem till exempel både ansluter till databas och ställer sql frågor, så borde du överväga att dela på dem.

Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?
Yes! Det gick bra. Först förstod jag inte hur jag skulle skapa “REM request”. Efter lite funderingar fick jag hjälp och hittade en app kallad “Postman” Där kan man skicka rem förfrågningar och se svaret (I json). När jag hade förstått hur postman fungerade testade jag att skicka lite förfrågningar med olika värden för att se att det fungerade. När jag skulle integrera så fick jag lite bekymmer. Jag la alla filer där de skulle utom den i route, som jag snabbt fixade. Efter det så funkade dock inte sökvägen. jag testade med /htdocs/remserver/api/users. Efter lite frustration förstod jag att man inte skulle ha remserver i sökvägen då api/users funktionen används direkt i htdocs. Vet inte om det är ramverket eller något annat som gör att det fungerar. Värt att kika vidare på.

Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?
Jag började med att använda composer för att ladda ner database foldern från anax. efter det kikade jag på filerna för att försöka förstå sambandet. Jag
tyckte det var svårt att förstå genom att bara läsa filerna hur jag skulle omforma dem till en “mvc” modul. Jag integrerade databasen i anax och började
arbeta på en model fil för databasen. Jag vet inte riktigt hur jag ska strukturera upp den än, så därför började jag med att försöka strukturera upp sql
frågorna i sql workbench. Även om informationen där blir statisk, så får jag i alla fall en bas med värden som jag kan börja med så det blir värden på
skärmen. Jag la mycket tid på att förstå alla filer och vad som gjorde vad, och det tog mycket av min tid. I nästa kmom ska jag försöka få klart så jag har
en route med en “template” sida med test värden på. Vi får se hur det går!

### Kmom 03


####Hur känns det att jobba med begreppen kring dependency injection, service locator och lazy loading?
Det känns helt okej. Jag har fortfarande inte riktigt anammat begreppet helt, men jag förstår hur det ska användas. Just lazy loading tycker jag är riktigt coolt, hur tjänster kan vara “aktiva” men inte laddad och att det sparar mycket laddningstid.

####Hur känns det att göra dig av med beroendet till app, blir di bättre?
Så här långt så känns det mest som copy paste. Många ställen där app stod, står nu di istället. Den största skillnaden jag märkte var hur informationen hanteras genom di. Det mesta av informationen är nu lagrad i en array, istället för “rå kod”. Det känns simplare och enklare att både läsa och skriva koden. Längre fram tror jag att jag kommer få ett bättre omfång om hur di används, ju mer jag kodar!

####Hur känns det att återigen göra refaktoring på din me-sida, blir det förbättring på kodstrukturen, eller bara annorlunda?
Som jag nämnde ovan så tycker jag koden blir renare och enklare att förstå. Jag gillar hur det struktureras i en array. Ju mer jag gör refaktoring, ju mer förstår jag och blir vän med de vanligaste filerna. Innan var det lite tafatt vilken fil jag skulle kolla i för att hitta X, men nu vet jag vart min kod finns.

####Lyckades du införa begreppen kring DI när du vidareutvecklade ditt kommentarssystem?
Jag gjorde inte mycket av kommentarssytemet i detta kursmomentet. Jag ändrade dock min nuvarande kod, så att den använder sig utav Di istället för app. En sak jag inte lyckades fixa var min databas. När jag ändrade till DI där så klagade valldatorn på att den funktionen inte fanns i DI. Jag väntar lite med den biten och låter databasen använda sig utav app just nu.

####Påbörjade du arbetet med databasmodellen eller avvaktar du till kommande kmom?
Jag har inte påbörjat mer än i tankarna kring hur jag ska göra modellen.

####Allmänna kommentarer kring din me-sida och dess kodstruktur?
Just nu känns det helt okej. Jag försökte fixa min frontmatter så att jag kunde injecta en klass till mina vyer, så jag kunde styla dem lite bättre. Även om jag gjorde som på föreläsningen mos hade så lyckades jag inte riktigt. Det får bli en runda två i senare kursmoment. jag anax, 0-1.
Jag har inte fixat så att bloggen syns på skolservern än. Jag har precis fixat min dsn så den stämmer, men ej skapat databasen på skolservarn.
Jag har dock inte heller fixat någon utskrift på blog sidan utan jag har gjort backend, så att jag kan ta ut informationen från databasen genom ett objekt (klass, array).

### Kmom 04
