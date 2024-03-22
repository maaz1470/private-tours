window.onload = function(){
    const head = document.head;
    const body = document.body;



    const facadesLoad = () => {
        // CSS Load Here


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


    }

    const facadesRegister = () => {
        setTimeout(() => {
            // GTag Register
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-66070595-1');
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