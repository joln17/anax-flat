Laddningstid
===============================
Jag valde att analysera tre dagstidningars webbplatser, SVD, DN och GP.
Tidningars webbplatser är ofta reklamtunga och långsamma att ladda därför tyckte
jag att det kunde vara intressant att se vilken tidning som lyckats bäst resp.
sämst med sin sajt. Jag testade förstasidorna, ekonomisidorna och ledarsidorna
med Chrome 62.0 med reklam på. Jag valde också att testa förstasidorna för resp.
sajt även med reklamen blockerad för att se hur mycket just reklamen påverkade
samt både i Chrome och Firefox för att se skillnader i olika webbläsare.
Testresultaten för Google
PageSpeed återfinns
[här](https://docs.google.com/spreadsheets/d/1SBVut0K61lQ4qqUjQUyDZSiYOMhWuGFElJQs_LQavfg/edit#gid=0)
och testresultaten för DevTools Network återfinns
[här](https://docs.google.com/spreadsheets/d/1SBVut0K61lQ4qqUjQUyDZSiYOMhWuGFElJQs_LQavfg/edit#gid=1823644175).

SVD.se
-------------------------------
* Länk förstasidan: [https://www.svd.se/](https://www.svd.se/)
* Länk ekonomisidan: [https://www.svd.se/naringsliv](https://www.svd.se/naringsliv)
* Länk ledarsidan: [https://www.svd.se/ledare](https://www.svd.se/ledare)

[FIGURE src="image/analysis/snapshot-svd.jpg"  class="center" alt="Snapshot SVD.se"]

### Sammanfattning av resultat i Google PageSpeed för förstasidan på SVD.se

| Sajt    | Resultat  |
|---------|-----------|
| Desktop | 51 (Poor) |
| Mobile  | 60 (Poor) |

### Medelvärden av laddningstid och storlek i DevTools för förstasidan på SVD.se

| Firefox 56.0.2     |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 194,67 | 156,00 |
| Size (MB)          |   6,34 |   5,50 |
| Transf. size (MB)  |   3,48 |   3,16 |
| Total time (s)     |  12,87 |   8,43 |
| DOM cont. Load (s) |   1,18 |   1,25 |
| Load (s)           |   4,66 |   5,18 |

| Chrome 62.0        |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 230,33 | 165,67 |
| Transf. size (MB)  |   4,40 |   3,37 |
| Total time (s)     |   8,15 |   3,29 |
| DOM cont. Load (s) |   1,15 |   1,39 |
| Load (s)           |   3,74 |   2,62 |

### Fördelning över vad som läses in för SVD.se
[FIGURE src="image/analysis/perf-svd.png" class="center" alt="Requests SVD.se"]

### Sammanfattning av test av SVD.se
Av det egna innehållet är det framförallt optimering av en del bilder på
förstasidan som hade kunnat snabba upp laddningstiden en del. Ekonomisidan och
ledarsidan är klart snabbare än förstasidan. Att minska mängden tung reklam hade
också kunnat förbättra laddningstiden.

DN.se
-------------------------------
* Länk förstasidan: [https://www.dn.se/](https://www.dn.se/)
* Länk ekonomisidan: [https://www.dn.se/ekonomi/](https://www.dn.se/ekonomi/)
* Länk ledarsidan: [https://www.dn.se/ledare/](https://www.dn.se/ledare/)

[FIGURE src="image/analysis/snapshot-dn.jpg" class="center" alt="Snapshot DN.se"]

### Sammanfattning av resultat i Google PageSpeed för förstasidan på DN.se

| Sajt    | Resultat        |
|---------|-----------------|
| Desktop | 65 (Needs work) |
| Mobile  | 33 (Poor)       |

### Medelvärden av laddningstid och storlek i DevTools för förstasidan på DN.se

| Firefox 56.0.2     |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 461,33 |  86,33 |
| Size (MB)          |   8,70 |   3,54 |
| Transf. size (MB)  |   2,59 |   1,98 |
| Total time (s)     |  74,67 |   5,75 |
| DOM cont. Load (s) |   1,95 |   1,64 |
| Load (s)           |   2,12 |   1,67 |

| Chrome 62.0        |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 485,67 | 100,67 |
| Transf. size (MB)  |   4,73 |   2,20 |
| Total time (s)     |  11,97 |   3,07 |
| DOM cont. Load (s) |   1,34 |   1,39 |
| Load (s)           |   9,94 |   2,56 |

### Fördelning över vad som läses in för DN.se
[FIGURE src="image/analysis/perf-dn.png" class="center" alt="Requests DN.se"]

### Sammanfattning av test av DN.se
Utan reklam är antalet requests ~90-100, med reklam stiger den till hela
~450-500. Mycket tung JavaScript och XHR-requests i reklamen gör att sidan
laddar extremt långsamt i framförallt Firefox. Av det egna innehållet finns det
en del optimeringar att göra bl.a. vad det gäller bilder. Ledarsidan som inte är
lika bildtung laddar betydligt snabbare än förstasidan och ekonomisidan.

GP.se
-------------------------------
* Länk förstasidan: [http://www.gp.se/](http://www.gp.se/)
* Länk ekonomisidan: [http://www.gp.se/nyheter/ekonomi](http://www.gp.se/nyheter/ekonomi)
* Länk ledarsidan: [http://www.gp.se/ledare](http://www.gp.se/ledare)

[FIGURE src="image/analysis/snapshot-gp.jpg" class="center" alt="Snapshot GP.se"]

### Sammanfattning av resultat i Google PageSpeed för förstasidan på GP.se

| Sajt    | Resultat        |
|---------|-----------------|
| Desktop | 68 (Needs work) |
| Mobile  | 20 (Poor)       |

### Medelvärden av laddningstid och storlek i DevTools för förstasidan på GP.se

| Firefox 56.0.2     |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 273,67 | 144,67 |
| Size (MB)          |   8,68 |   6,09 |
| Transf. size (MB)  |   4,29 |   3,82 |
| Total time (s)     |  23,65 |  11,05 |
| DOM cont. Load (s) |   1,72 |   1,37 |
| Load (s)           |   1,72 |   1,45 |

| Chrome 62.0        |        |        |
|--------------------|--------|--------|
| Adblock            |    Off |     On |
| Requests (#)       | 296,67 | 149,67 |
| Transf. size (MB)  |   5,70 |   4,40 |
| Total time (s)     |   8,12 |   3,65 |
| DOM cont. Load (s) |   3,80 |   1,72 |
| Load (s)           |   5,89 |   3,40 |

### Fördelning över vad som läses in för GP.se
[FIGURE src="image/analysis/perf-gp.png" class="center" alt="Requests GP.se"]

### Sammanfattning av test av GP.se
GP borde framförallt optimera sin mobilsida bättre. Ekonomisidan på mobil fick
t.ex. anmärkningar på 8/10 optimeringsmöjligheter på Google PageSpeed.
Även för GP är det dock i mångt och mycket reklamen som bidrar till långsam
laddningstid med mycket tung JavaScript. Finns även en del optimeringar att göra
med t.ex. bilderna men ledarsidan som inte är så bildtung laddar bara marginellt
snabbare än förstasidan.

Sammanfattning och slutsats
-------------------------------
Alla tre sajter lider framförallt av att de laddar mycket tung reklam. I
särklass värst är upplevelsen av DN.se med Firefox som åtminstone med min
nuvarande installation tog över minuten att ladda komplett. I övrigt förekommer
en del ej optimerade bilder där värsta exemplet återfanns på SVD.se där ett foto
var i PNG-format och upptog ~700KB trots att det inte handlade om en högupplöst
bild. Även med reklam blockerad bidrar ganska tung JavaScript till ökad laddtid
på alla tre sidor.

Google PageSpeed har några gemensamma förbättringsförslag för alla tre sajter: "Ta bort
JavaScript- och CSS-kod som blockerar renderingen från innehåll ovanför mitten",
"Aktivera komprimering", "Utnyttja cachelagring i webbläsare", "Optimera bilder"
och "Minifiera HTML" (förutom DN desktop på den sista). För DN föreslår Google
också att man bör "Prioritera synligt innehåll" och "Minska svarstiden från
servern" medan GP också bör "Minifiera JavaScript".

Baserat på mätresultaten och subjektiv upplevelse av laddningstiden för sajterna
skulle jag rangordna dem som:

1. SVD.se
2. GP.se
3. DN.se

SVD fick visserligen sämst resultat för desktop i Google PageSpeed men i
mätningarna i DevTools är det sajten som får bäst resultat överlag. För mobil är
det också sidan som får bäst resultat i PageSpeed. Som tvåa placerar jag GP
trots en riktigt dålig poäng för mobilsidan i PageSpeed. Desktop-sidan lyckas
dock bättre och med reklam på är laddningstiderna i DevTools betydligt bättre än
testets sistaplacering där DN hamnar. DN med reklam påslaget är en riktigt
bedrövlig upplevelse framförallt i Firefox, men även i Chrome blir sidan den
klart långsammaste.

För att en sida ska kännas snabb tycker jag personligen att laddningstiden av
synligt "above-the-fold"-innehåll inte bör överstiga mer än max ett par
sekunder. Det kan däremot vara ok att det tar lite längre tid att ladda icke
synligt innehåll och t.ex. reklam i sidebars om det inte påverkar övrigt
innehåll.

Jag har valt att göra utvärderingen själv och inte i grupp.
