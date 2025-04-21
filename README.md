Repository för kursen MVC

![MVC](https://raw.githubusercontent.com/hota24/mvc/refs/heads/main/public/img/mvc.png)


För att kunna köra webbappen behöver du Symfony installerad på din server. 
Instruktion finns här: [Installing & Setting up the Symfony Framework](https://symfony.com/doc/current/setup.html)




**Instruktion:**

Klona repot:

    git clone https://github.com/hota24/mvc.git


Gå till appens rootmapp. Förberedd server:
    composer install
    npm install

Starta upp dev server lokal:
    symfony server:start

Webbappen använder Encore webpack med support för SASS och BootstrapCSS. Bygg filerna med följande kommando:

    npm run build

eller låta filerna bevakas för ändringar (endast dev):

    npm run watch

