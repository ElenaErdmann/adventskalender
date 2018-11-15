# adventskalender
Repo for the Adventskalender since 2017

Es gibt zwei branches master & public.
Der Server läd automatisch den public branch wenn er aktuallisiert wird.

Installation:
```shell
git clone https://github.com/journocode/adventskalender.git
```
Um zu Testen oder die Änderungen zu publizieren muss man im Terminal in dem Projektordner sein.
Beispielsweise:
```shell
cd ~/adventskalender
```
Um local zu testen ist es am einfachsten mit php im Projektordner einen Testserver zu starten:
```shell 
php -S localhost:8080
```
Jetzt ist die Seite im Browser unter http://localhost:8080 erreichbar.
Publizieren:

``` shell
git commit -am "Commit message"
git pull origin master
git push origin master 

```
