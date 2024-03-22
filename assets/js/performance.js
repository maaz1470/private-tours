window.onload = function(){
    const head = document.head;
    const body = document.body;



    const facadesLoad = () => {
        // CSS Load Here
        // Cookie Consent Load Here
        const cookie_consent = document.createElement('link')
        cookie_consent.href = 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css';
        cookie_consent.type = 'text/css'
        cookie_consent.rel = 'stylesheet'
        head.appendChild(cookie_consent)
        // fh kit Load Here
        const fh_kit = document.createElement('link')
        fh_kit.href = 'https://fh-kit.com/buttons/v2/?color=FE7A00';
        fh_kit.type = 'text/css'
        fh_kit.rel = 'stylesheet'
        fh_kit.media = 'screen'
        head.appendChild(fh_kit)
        // font awesome
        const fontAwesome = document.createElement('link')
        fontAwesome.href = 'assets/plugins/font-awesome/css/font-awesome.css'
        fontAwesome.rel = 'stylesheet'
        head.appendChild(fontAwesome)

        // JS Load Here

        // GTag Manager
        const g_tag_manager = document.createElement('script')
        g_tag_manager.async = true;
        g_tag_manager.src = 'https://www.googletagmanager.com/gtag/js?id=UA-66070595-1'
        body.appendChild(g_tag_manager)
        // Back to top js
        const back_to_top = document.createElement('script')
        back_to_top.async = true;
        back_to_top.src = 'assets/plugins/back-to-top.js'
        body.appendChild(back_to_top)
        // Cookie Consent JS
        const cookie_consent_js = document.createElement('script')
        cookie_consent_js.src = 'https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js'
        body.appendChild(cookie_consent_js)
        const data_api = document.createElement('script')
        data_api.src = 'https://fareharbor.com/embeds/api/v1/?autolightframe=yes'
        body.appendChild(data_api)
        


    }

    const facadesRegister = () => {
        setTimeout(() => {
            // GTag Register
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-66070595-1');


            // Cookie Consent Register
            window.cookieconsent.initialise({
                "palette": {
                  "popup": {
                    "background": "#eaf7f7",
                    "text": "#5c7291"
                  },
                  "button": {
                    "background": "#56cbdb",
                    "text": "#ffffff"
                  }
                },
                "content": {
                  "href": "https://privatetoursofvenice.com/privacypolicy.html"
                }
              })
        },1000)
    }

    window.addEventListener('scroll',function(e){
        if(!window.rh){
            if(window.scrollY > 1500){
                window.rh = true;
                facadesLoad();
                facadesRegister();
            }
        }
    })
    
}