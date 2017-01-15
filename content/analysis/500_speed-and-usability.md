
Speedtest
================

|Hemsida|undersida|laddningstid|mobile |desktop|resources|storlek|
|---------|--------------|-----------|--------|---------|----------|--------|
|Steam  | store          |0.51s      | 51/100|44/100|93          |3071kb|
|Steam  | community |8.25s      | 56/100|50/100|108        |13833kb|
|Steam  | support      |1.79s      | 69/100|82/100|14          |505kb  |

###Förbättringar:
Har väldigt mycket bilder, vilket är nödvändigt men möjligtvis
färre element. sidan fortsätter nedåt med mycket som laddar. Minifiera javascript och html.

|Hemsida|undersida|laddningstid|mobile |desktop|resources|storlek|
|----------|----------|-------------|---------|---------|----------|--------|
|dbwebb | start             |3.41s         | 71/100|89/100|18    |372kb |
|dbwebb | kmom04 färg|1.10s         | 75/100|91/100|13    |556kb  |
|dbwebb | faq               |2.45s         | 75/100|89/100|10   |244kb  |

###Förbättringar:
Har det som behövs. Borde eventuellt minska html och javascript (enligt speedtest).

|Hemsida|undersida|laddningstid|mobile |desktop|resources|storlek|
|---------|--------------|-----------|--------|---------|----------|--------|
|humble | start          |5.01s      | 54/100|75/100 |61         |4293kb|
|bundle  | brookbundle|4.89s      | 51/100|74/100|60         |4332kb|
|bundle  | store           |9.28s      | 33/100|32/100|221       |8689kb|

###Förbättringar:
Minifiera html (enligt speedtest). Även förbättra servern.

|Hemsida|undersida|laddningstid|mobile |desktop|resources|storlek|
|---------|--------------|-----------|--------|---------|----------|--------|
|lingsCars| start         |241s +    | 75/100|96/100|451 +   |18000kb|
|lingsCars| pricelist    |65s +      | 60/100|73/100|205 +    |7690kb|
|lingsCars| fun           |45.24s + | 54/100|69/100|310 +    |7737kb|

###Förbättringar:
Ha inte massa blinkande saker överallt. Inte lika mycket saker som laddar om sig.

###Sammanfattning:
De flesta sidor verkar behöva minimera sin javascript och html. Några av css filerna får bara laddas om något annat har laddats klart först. Det skapar en delay i laddningstid vilket borde kunnas optimeras.

####Maximal laddningstid:
Beroende på innehåll så mellan 3-5 sekunder. Om det är text eller liknande så ska sidan ladda snabbare. Däremot om det är en webbstore eller mer krävande content kan det få ta längre tid, eftersom man då förstår anledningen och fortfarande har intresse.

####Medverkande:
Oscar Bäck, Niklas Andersson, Andre Johansson, Ylva Rasmusson Wright.
