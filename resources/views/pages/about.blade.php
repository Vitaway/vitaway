@extends('layouts.guest')

    @section('title') About @stop

    @section('metas')
        <meta name="description" content="Discover Vitaway - a leading healthcare startup on a mission to transform the healthcare industry. Learn about our dedicated team, innovative solutions, and commitment to improving lives.">
        <meta name="keywords" content="Vitaway, About Us, Healthcare Startup, Mission, Team, Innovations">
    @stop

    @section('styles')
        <link rel="stylesheet" href="/css/navigation-bar.css">
        <link rel="stylesheet" href="/css/pages/about.css">
        <link rel="stylesheet" href="/css/footer.css">
        <style id="css_c7d0t">#masterPage{--pinned-layers-in-page:0;}#comp-l8plntep:not([data-screen-in-hide="done"]){opacity:0;}#comp-l8plntek:not([data-screen-in-hide="done"]){opacity:0;}#comp-l8pmp8mt:not([data-screen-in-hide="done"]){opacity:0;}#comp-l8pmp8je:not([data-screen-in-hide="done"]){opacity:0;}#comp-l8ppl4e0:not([data-screen-in-hide="done"]){opacity:0;}#comp-l8ppl4e6:not([data-screen-in-hide="done"]){opacity:0;}
            [data-mesh-id=comp-l8pkop4minlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pkop4minlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:432px;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pkop4minlineContent-gridContainer] > [id="comp-l8pkopcq"]{position:relative;margin:136px 0px 10px calc((100% - 980px) * 0.5);left:2px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l98770n4inlineContent]{height:auto;width:100%}[data-mesh-id=comp-l98770n4inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l98770n4inlineContent-gridContainer] > [id="comp-l98770nh"]{position:relative;margin:13px 0px 13px calc((100% - 980px) * 0.5);left:264px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l98770n4inlineContent-gridContainer] > [id="comp-l98771y0"]{position:relative;margin:13px 0px 13px calc((100% - 980px) * 0.5);left:392px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l98770n4inlineContent-gridContainer] > [id="comp-l98771y9"]{position:relative;margin:13px 0px 13px calc((100% - 980px) * 0.5);left:495px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l98770n4inlineContent-gridContainer] > [id="comp-l98771yo"]{position:relative;margin:13px 0px 13px calc((100% - 980px) * 0.5);left:590px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pkwveuinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pkwveuinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:265px;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pkwveuinlineContent-gridContainer] > [id="comp-l8pkx8mi"]{position:relative;margin:70px 0px 10px calc((100% - 980px) * 0.5);left:197px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pl1mj2inlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pl1mj2inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:570px;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pl1mj2inlineContent-gridContainer] > [id="comp-l8pl205l"]{position:relative;margin:94px 0px 10px calc((100% - 980px) * 0.5);left:185px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plabp0inlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8plabp0inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8plabp0inlineContent-gridContainer] > [id="comp-l8plb3ac"]{position:relative;margin:80px 0px 31px calc((100% - 980px) * 0.5);left:284px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plabp0inlineContent-gridContainer] > [id="comp-l8plk4wv"]{position:relative;margin:30px 0px 44px calc((100% - 980px) * 0.5);left:129px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plabp0inlineContent-gridContainer] > [id="comp-l8plckxo"]{position:relative;margin:0px 0px 60px calc((100% - 980px) * 0.5);left:493px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plabp0inlineContent-gridContainer] > [id="comp-l8ple1za"]{position:relative;margin:0px 0px 51px calc((100% - 980px) * 0.5);left:492px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plnteeinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8plnteeinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:460px;grid-template-rows:min-content 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8plnteeinlineContent-gridContainer] > [id="comp-l8plntep"]{position:relative;margin:130px 0px 10px calc((100% - 980px) * 0.5);left:63px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plnteeinlineContent-gridContainer] > [id="comp-l8plntek"]{position:relative;margin:0px 0px 10px calc((100% - 980px) * 0.5);left:63px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plntetinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8plntetinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:460px;grid-template-rows:min-content 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8plntetinlineContent-gridContainer] > [id="comp-l8pmp8mt"]{position:relative;margin:150px 0px 10px calc((100% - 980px) * 0.5);left:83px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8plntetinlineContent-gridContainer] > [id="comp-l8pmp8je"]{position:relative;margin:0px 0px 10px calc((100% - 980px) * 0.5);left:83px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmuq64"]{position:relative;margin:68px 0px 10px calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmrlp0"]{position:relative;margin:83px 0px 10px calc((100% - 980px) * 0.5);left:67px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmx099"]{position:relative;margin:70px 0px 70px calc((100% - 980px) * 0.5);left:354px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmsb96"]{position:relative;margin:84px 0px 10px calc((100% - 980px) * 0.5);left:428px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmyy3d"]{position:relative;margin:68px 0px 10px calc((100% - 980px) * 0.5);left:729px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pmq2v3inlineContent-gridContainer] > [id="comp-l8pmsrvh"]{position:relative;margin:84px 0px 10px calc((100% - 980px) * 0.5);left:808px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pn2exvinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pn2exvinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pn2exvinlineContent-gridContainer] > [id="comp-l8pn31pv"]{position:relative;margin:58px 0px 38px calc((100% - 980px) * 0.5);left:184px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pn2exvinlineContent-gridContainer] > [id="comp-l8pnad68"]{position:relative;margin:0px 0px -26px calc((100% - 980px) * 0.5);left:-109px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pn2exvinlineContent-gridContainer] > [id="comp-l8pn51ob"]{position:relative;margin:67px 0px 47px calc((100% - 980px) * 0.5);left:487px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pn2exvinlineContent-gridContainer] > [id="comp-l8pn7zpj"]{position:relative;margin:0px 0px 63px calc((100% - 980px) * 0.5);left:491px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(4, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pncc9p"]{position:relative;margin:100px 0px 56px calc((100% - 980px) * 0.5);left:338px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnmqna"]{position:relative;margin:1px 0px 37px calc((100% - 980px) * 0.5);left:-124px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnrbxz"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:-124px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnvil2"]{position:relative;margin:0px 0px 10px calc((100% - 980px) * 0.5);left:-125px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnphaq"]{position:relative;margin:0px 0px -27px calc((100% - 980px) * 0.5);left:502px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnsrub"]{position:relative;margin:88px 0px -27px calc((100% - 980px) * 0.5);left:502px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8pnyafl"]{position:relative;margin:64px 0px 68px calc((100% - 980px) * 0.5);left:502px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnaraminlineContent-gridContainer] > [id="comp-l8po1lat"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:313px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8poes6tinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8poes6tinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8poes6tinlineContent-gridContainer] > [id="comp-l8pohies"]{position:relative;margin:45px 0px 44px calc((100% - 980px) * 0.5);left:316px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8poes6tinlineContent-gridContainer] > [id="comp-l8pp6h9y"]{position:relative;margin:91px 0px 10px calc((100% - 980px) * 0.5);left:-44px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8poes6tinlineContent-gridContainer] > [id="comp-l8ponqo3"]{position:relative;margin:0px 0px 48px calc((100% - 980px) * 0.5);left:493px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8poes6tinlineContent-gridContainer] > [id="comp-l8pp1ynm"]{position:relative;margin:0px 0px 52px calc((100% - 980px) * 0.5);left:505px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uus6inlineContent]{height:auto;width:100%}[data-mesh-id=comp-lav4uus6inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:min-content 1fr;grid-template-columns:100%}[data-mesh-id=comp-lav4uus6inlineContent-gridContainer] > [id="comp-lav4uuse"]{position:relative;margin:65px 0px 0 calc((100% - 980px) * 0.5);left:338px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uus6inlineContent-gridContainer] > [id="comp-lav4uusi"]{position:relative;margin:0px 0px 0px calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8ppfiojinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8ppfiojinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:1fr;grid-template-columns:100%}[data-mesh-id=comp-l8ppfiojinlineContent-gridContainer] > [id="comp-l8ppmp49"]{position:relative;margin:54px 0px 64px calc((100% - 980px) * 0.5);left:338px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8ppl4duinlineContent]{height:auto;width:100%}[data-mesh-id=comp-l8ppl4duinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:507px;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8ppl4duinlineContent-gridContainer] > [id="comp-l8ppl4e0"]{position:relative;margin:127px 0px 10px calc((100% - 980px) * 0.5);left:58px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8ppl4duinlineContent-gridContainer] > [id="comp-l8ppl4e6"]{position:relative;margin:0px 0px 38px calc((100% - 980px) * 0.5);left:63px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8ppl4duinlineContent-gridContainer] > [id="comp-l9ebxgsh"]{position:relative;margin:0px 0px 10px calc((100% - 980px) * 0.5);left:402px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnmqnainlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnmqnainlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnmqnainlineContent-gridContainer] > [id="comp-l8pnmqsw"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnmqnainlineContent-gridContainer] > [id="comp-l8pnmqt4"]{position:relative;margin:0px 0px 49px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnmqnainlineContent-gridContainer] > [id="comp-l8pnmqv8"]{position:relative;margin:0px 0px 32px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnmqnainlineContent-gridContainer] > [id="comp-l8pnmqt7"]{position:relative;margin:28px 0px -14px 0;left:394px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnrbxzinlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnrbxzinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnrbxzinlineContent-gridContainer] > [id="comp-l8pnrc25"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnrbxzinlineContent-gridContainer] > [id="comp-l8pnrc29"]{position:relative;margin:0px 0px 26px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnrbxzinlineContent-gridContainer] > [id="comp-l8pnrc2i"]{position:relative;margin:0px 0px 32px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnrbxzinlineContent-gridContainer] > [id="comp-l8pnrc2d"]{position:relative;margin:28px 0px -15px 0;left:394px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnvil2inlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnvil2inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnvil2inlineContent-gridContainer] > [id="comp-l8pnvins"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnvil2inlineContent-gridContainer] > [id="comp-l8pnvinx"]{position:relative;margin:0px 0px 37px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnvil2inlineContent-gridContainer] > [id="comp-l8pnvio1"]{position:relative;margin:28px 0px 18px 0;left:394px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnvil2inlineContent-gridContainer] > [id="comp-l8pnvio5"]{position:relative;margin:0px 0px 21px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnphaqinlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnphaqinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnphaqinlineContent-gridContainer] > [id="comp-l8pnphdf"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnphaqinlineContent-gridContainer] > [id="comp-l8pnphdj"]{position:relative;margin:0px 0px 70px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnphaqinlineContent-gridContainer] > [id="comp-l8pnphdp"]{position:relative;margin:28px 0px 51px 0;left:394px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnphaqinlineContent-gridContainer] > [id="comp-l8pnphdu"]{position:relative;margin:0px 0px 32px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnsrubinlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnsrubinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnsrubinlineContent-gridContainer] > [id="comp-l8pnsrx3"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnsrubinlineContent-gridContainer] > [id="comp-l8pnsrx7"]{position:relative;margin:0px 0px 49px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnsrubinlineContent-gridContainer] > [id="comp-l8pnsrxh"]{position:relative;margin:0px 0px 32px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnsrubinlineContent-gridContainer] > [id="comp-l8pnsrxc"]{position:relative;margin:28px 0px -14px 0;left:393px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnyaflinlineContent]{height:auto;width:593px}[data-mesh-id=comp-l8pnyaflinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-l8pnyaflinlineContent-gridContainer] > [id="comp-l8pnyakb"]{position:relative;margin:28px 0px 9px 0;left:34px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnyaflinlineContent-gridContainer] > [id="comp-l8pnyaki"]{position:relative;margin:0px 0px 58px 0;left:34px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnyaflinlineContent-gridContainer] > [id="comp-l8pnyakn"]{position:relative;margin:28px 0px 61px 0;left:394px;grid-area:1 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-l8pnyaflinlineContent-gridContainer] > [id="comp-l8pnyaks"]{position:relative;margin:0px 0px 22px 0;left:32px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uusoinlineContent]{height:auto;width:100%}[data-mesh-id=comp-lav4uusoinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-lav4uusoinlineContent-gridContainer] > [id="comp-lav4uust"]{position:relative;margin:45px 0px 23px calc((100% - 251px) * 0.5);left:17px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uusoinlineContent-gridContainer] > [id="comp-lav4uusy"]{position:relative;margin:0px 0px 0 calc((100% - 251px) * 0.5);left:55px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uusoinlineContent-gridContainer] > [id="comp-lav4uut2"]{position:relative;margin:0px 0px 69px calc((100% - 251px) * 0.5);left:35px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uut5inlineContent]{height:auto;width:100%}[data-mesh-id=comp-lav4uut5inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-lav4uut5inlineContent-gridContainer] > [id="comp-lav4uutb"]{position:relative;margin:45px 0px 29px calc((100% - 243px) * 0.5);left:10px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uut5inlineContent-gridContainer] > [id="comp-lav4uutf"]{position:relative;margin:0px 0px 6px calc((100% - 243px) * 0.5);left:50px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uut5inlineContent-gridContainer] > [id="comp-lav4uutj"]{position:relative;margin:0px 0px 70px calc((100% - 243px) * 0.5);left:28px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uutninlineContent]{height:auto;width:100%}[data-mesh-id=comp-lav4uutninlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:438px;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-lav4uutninlineContent-gridContainer] > [id="comp-lav4uuts"]{position:relative;margin:44px 0px 30px calc((100% - 243px) * 0.5);left:14px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uutninlineContent-gridContainer] > [id="comp-lav4uutx"]{position:relative;margin:0px 0px 8px calc((100% - 243px) * 0.5);left:66px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uutninlineContent-gridContainer] > [id="comp-lav4uuu1"]{position:relative;margin:0px 0px 10px calc((100% - 243px) * 0.5);left:31px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uuu4inlineContent]{height:auto;width:100%}[data-mesh-id=comp-lav4uuu4inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:438px;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%}[data-mesh-id=comp-lav4uuu4inlineContent-gridContainer] > [id="comp-lav4uuua"]{position:relative;margin:44px 0px 30px calc((100% - 243px) * 0.5);left:14px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uuu4inlineContent-gridContainer] > [id="comp-lav4uuue"]{position:relative;margin:0px 0px 6px calc((100% - 243px) * 0.5);left:66px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=comp-lav4uuu4inlineContent-gridContainer] > [id="comp-lav4uuui"]{position:relative;margin:0px 0px 10px calc((100% - 243px) * 0.5);left:30px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent]{height:auto;width:100%}[data-mesh-id=Containerc7d0tinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:953px;grid-template-rows:repeat(12, min-content) 1fr;grid-template-columns:100%;padding-bottom:0px;box-sizing:border-box}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pkooyy"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l9876gph"]{position:relative;margin:10px 0px -1px calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pkwvbj"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pl1mev"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8plab53"]{position:relative;margin:0px 0px 1px calc((100% - 980px) * 0.5);left:0px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8plnspu"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:-172px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pmq2q0"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pn2euo"]{position:relative;margin:0px 0px 40px calc((100% - 980px) * 0.5);left:0px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8pnar78"]{position:relative;margin:0px 0px 1px calc((100% - 980px) * 0.5);left:0px;grid-area:9 / 1 / 10 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8poes30"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:10 / 1 / 11 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-lav4uukd"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:11 / 1 / 12 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8ppfik8"]{position:relative;margin:0px 0px 10px calc((100% - 980px) * 0.5);left:0px;grid-area:12 / 1 / 13 / 2;justify-self:start;align-self:start}[data-mesh-id=Containerc7d0tinlineContent-gridContainer] > [id="comp-l8ppl49g"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:-172px;grid-area:13 / 1 / 14 / 2;justify-self:start;align-self:start}#comp-l8pkopcq{width:439px;height:136px}#comp-l98770nh{width:230px;height:19px}#comp-l98771y0{width:131px;height:19px}#comp-l98771y9{width:131px;height:19px}#comp-l98771yo{width:131px;height:19px}#comp-l8pkx8mi{width:591px;height:112px}#comp-l8pl205l{width:591px;height:365px}#comp-l8plb3ac{width:417px;height:46px}#comp-l8plk4wv{width:97px;height:120px}#comp-l8plckxo{width:591px;height:134px}#comp-l8ple1za{width:251px;height:46px}#comp-l8plntep{width:796px;height:139px}#comp-l8plntek{width:732px;height:35px}#comp-l8pmp8mt{width:796px;height:139px}#comp-l8pmp8je{width:732px;height:35px}#comp-l8pmuq64{width:51px;height:51px}#comp-l8pmrlp0{width:235px;height:29px}#comp-l8pmx099{width:57px;height:51px}#comp-l8pmsb96{width:262px;height:29px}#comp-l8pmyy3d{width:59px;height:51px}#comp-l8pmsrvh{width:304px;height:29px}#comp-l8pn31pv{width:616px;height:46px}#comp-l8pnad68{width:555px;height:555px}#comp-l8pn51ob{width:526px;height:415px}#comp-l8pn7zpj{width:251px;height:46px}#comp-l8pncc9p{width:310px;height:92px}#comp-l8po1lat{width:343px;height:22px}#comp-l8pohies{width:364px;height:46px}#comp-l8pp6h9y{width:445px;height:296px}#comp-l8ponqo3{width:518px;height:412px}#comp-l8pp1ynm{width:251px;height:46px}#comp-lav4uuse{width:310px;height:46px}#comp-l8ppmp49{width:310px;height:46px}#comp-l8ppl4e0{width:796px;height:174px}#comp-l8ppl4e6{width:732px;height:34px}#comp-l9ebxgsh{width:176px;height:46px}#comp-l8pnmqsw{width:348px;height:44px}#comp-l8pnmqt4{width:343px;height:90px}#comp-l8pnmqv8{width:245px;height:45px}#comp-l8pnmqt7{width:176px;height:206px}#comp-l8pnrc25{width:348px;height:44px}#comp-l8pnrc29{width:343px;height:112px}#comp-l8pnrc2i{width:245px;height:45px}#comp-l8pnrc2d{width:176px;height:206px}#comp-l8pnvins{width:348px;height:44px}#comp-l8pnvinx{width:343px;height:134px}#comp-l8pnvio1{width:176px;height:206px}#comp-l8pnvio5{width:245px;height:45px}#comp-l8pnphdf{width:348px;height:88px}#comp-l8pnphdj{width:343px;height:90px}#comp-l8pnphdp{width:176px;height:206px}#comp-l8pnphdu{width:245px;height:45px}#comp-l8pnsrx3{width:348px;height:44px}#comp-l8pnsrx7{width:343px;height:90px}#comp-l8pnsrxh{width:245px;height:45px}#comp-l8pnsrxc{width:176px;height:206px}#comp-l8pnyakb{width:348px;height:88px}#comp-l8pnyaki{width:343px;height:112px}#comp-l8pnyakn{width:176px;height:206px}#comp-l8pnyaks{width:245px;height:45px}#comp-lav4uust{width:216px;height:217px}#comp-lav4uusy{width:138px;height:29px}#comp-lav4uut2{width:180px;height:55px}#comp-lav4uutb{width:216px;height:217px}#comp-lav4uutf{width:126px;height:16px}#comp-lav4uutj{width:180px;height:55px}#comp-lav4uuts{width:210px;height:217px}#comp-lav4uutx{width:110px;height:16px}#comp-lav4uuu1{width:180px;height:36px}#comp-lav4uuua{width:211px;height:217px}#comp-lav4uuue{width:110px;height:16px}#comp-lav4uuui{width:180px;height:18px}#c7d0t{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pkooyy{left:0;margin-left:0;width:100%;min-width:980px}#comp-l9876gph{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pkwvbj{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pl1mev{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8plab53{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8plnspu{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pmq2q0{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pn2euo{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pnar78{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8poes30{left:0;margin-left:0;width:100%;min-width:980px}#comp-lav4uukd{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8ppfik8{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8ppl49g{left:0;margin-left:0;width:100%;min-width:980px}#comp-l8pkop4m{width:980px}#comp-l98770n4{width:980px}#comp-l8pkwveu{width:980px}#comp-l8pl1mj2{width:980px}#comp-l8plabp0{width:980px}#comp-l8plntee{width:1325px}#comp-l8plntet{width:1325px}#comp-l8pmq2v3{width:980px}#comp-l8pn2exv{width:980px}#comp-l8pnaram{width:980px}#comp-l8poes6t{width:980px}#comp-lav4uus6{width:980px}#comp-l8ppfioj{width:980px}#comp-l8ppl4du{width:1325px}#comp-l8pnmqna{width:593px}#comp-l8pnrbxz{width:593px}#comp-l8pnvil2{width:593px}#comp-l8pnphaq{width:593px}#comp-l8pnsrub{width:593px}#comp-l8pnyafl{width:593px}#comp-lav4uusi{width:980px}#comp-lav4uuso{width:251px}#comp-lav4uut5{width:243px}#comp-lav4uutn{width:243px}#comp-lav4uuu4{width:243px}
            @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7azYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7YjYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7aDYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7ZjYYiAzcPA.woff2") format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7azYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7YjYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7aDYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7ZjYYiAzcPA.woff2") format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7azYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7YjYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7aDYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 400;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7ZjYYiAzcPA.woff2") format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7azYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7YjYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7aDYYiAzcPDKo.woff2") format('woff2');
          unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
          font-family: 'Caveat';
          font-style: normal;
          font-weight: 700;
          src: url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/caveat/v10/Wnz6HAc5bAfYB2Q7ZjYYiAzcPA.woff2") format('woff2');
          unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
        font-display: block;
        font-family: wf_33ef55624b7746f2b3d70c635;
        src: url("https://static.wixstatic.com/ufonts/899dc0_33ef55624b7746f2b3d70c635eff29c0/woff2/file.woff2") format("woff2"),
        url("https://static.wixstatic.com/ufonts/899dc0_33ef55624b7746f2b3d70c635eff29c0/woff/file.woff") format("woff"),
        url("https://static.wixstatic.com/ufonts/899dc0_33ef55624b7746f2b3d70c635eff29c0/ttf/file.ttf") format("ttf");
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 400;
        src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk7yRZrPJ-M.woff2") format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 400;
        src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk7yRZrPJ-M.woff2") format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 400;
        src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk7yRZrPJ-M.woff2") format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 400;
        src: local('Playfair Display Italic'), local('PlayfairDisplay-Italic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7yRZrPA.woff2") format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 700;
        src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu4DRmFqWF_ljR.woff2") format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 700;
        src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6zRmFqWF_ljR.woff2") format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 700;
        src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu6jRmFqWF_ljR.woff2") format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: italic;
        font-weight: 700;
        src: local('Playfair Display Bold Italic'), local('PlayfairDisplay-BoldItalic'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFnD-vYSZviVYUb_rj3ij__anPXDTngOWwu5DRmFqWF_g.woff2") format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2") format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2") format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2") format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 400;
        src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2") format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWoe5j5hNKe1_w.woff2") format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWEe5j5hNKe1_w.woff2") format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWAe5j5hNKe1_w.woff2") format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        font-display: block;
        }
        @font-face {
        font-family: 'Playfair Display';
        font-style: normal;
        font-weight: 700;
        src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url("//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5j5hNKc.woff2") format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        font-display: block;
        }
        @font-face {
        font-display: block;
        font-family: wf_b19d6427c86943329ddb29bc2;
        src: url("https://static.wixstatic.com/ufonts/899dc0_b19d6427c86943329ddb29bc22aaa1b7/woff2/file.woff2") format("woff2"),
        url("https://static.wixstatic.com/ufonts/899dc0_b19d6427c86943329ddb29bc22aaa1b7/woff/file.woff") format("woff"),
        url("https://static.wixstatic.com/ufonts/899dc0_b19d6427c86943329ddb29bc22aaa1b7/ttf/file.ttf") format("ttf");
        }

        #comp-l8pkopcq { height:auto }#comp-l98770nh { height:auto }#comp-l98771y0 { height:auto }#comp-l98771y9 { height:auto }#comp-l98771yo { height:auto }#comp-l8pkx8mi { height:auto }#comp-l8pl205l { height:auto }#comp-l8plb3ac { height:auto }#comp-l8plk4wv { --opacity:1 }#comp-l8plckxo { height:auto }#comp-l8ple1za { --rd:50px 50px 50px 50px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:0.03px 1.00px 14px 4px rgba(255,255,255,0.6);--fnt:normal normal normal 15px/1.4em wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular;--trans2:color 0.4s ease 0s;--txt:255,255,255;--brw:0px;--bg:13,184,170;--brd:171,5,53;--bgh:13,184,170;--brdh:237,21,102;--txth:255,255,255;--bgd:204,204,204;--alpha-bgd:1;--brdd:204,204,204;--alpha-brdd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txt:1;--alpha-brdh:1;--alpha-brd:0;--alpha-txth:1;--alpha-bg:1;--alpha-bgh:1;--shc-mutated-brightness:7,92,85;--label-align:center;--label-text-align:center }#comp-l8plntep { height:auto }#comp-l8plntek { height:auto }#comp-l8pmp8mt { height:auto }#comp-l8pmp8je { height:auto }#comp-l8pmuq64 { --opacity:1 }#comp-l8pmrlp0 { height:auto }#comp-l8pmx099 { --opacity:1 }#comp-l8pmsb96 { height:auto }#comp-l8pmyy3d { --opacity:1 }#comp-l8pmsrvh { height:auto }#comp-l8pn31pv { height:auto }#comp-l8pnad68 { --contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;--height:555px;--width:555px }#comp-l8pn51ob { height:auto }#comp-l8pn7zpj { --rd:50px 50px 50px 50px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:0.03px 1.00px 14px 4px rgba(255,255,255,0.6);--fnt:normal normal normal 15px/1.4em wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular;--trans2:color 0.4s ease 0s;--txt:255,255,255;--brw:0px;--bg:13,184,170;--brd:171,5,53;--bgh:13,184,170;--brdh:237,21,102;--txth:255,255,255;--bgd:204,204,204;--alpha-bgd:1;--brdd:204,204,204;--alpha-brdd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txt:1;--alpha-brdh:1;--alpha-brd:0;--alpha-txth:1;--alpha-bg:1;--alpha-bgh:1;--shc-mutated-brightness:7,92,85;--label-align:center;--label-text-align:center }#comp-l8pncc9p { height:auto }#comp-l8po1lat { height:auto }#comp-l8pohies { height:auto }#comp-l8pp6h9y { --contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;--height:296px;--width:445px }#comp-l8ponqo3 { height:auto }#comp-l8pp1ynm { --rd:50px 50px 50px 50px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:0.03px 1.00px 14px 4px rgba(255,255,255,0.6);--fnt:normal normal normal 15px/1.4em wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular;--trans2:color 0.4s ease 0s;--txt:255,255,255;--brw:0px;--bg:13,184,170;--brd:171,5,53;--bgh:29,66,102;--brdh:237,21,102;--txth:255,255,255;--bgd:204,204,204;--alpha-bgd:1;--brdd:204,204,204;--alpha-brdd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txt:1;--alpha-brdh:1;--alpha-brd:0;--alpha-txth:1;--alpha-bg:1;--alpha-bgh:1;--shc-mutated-brightness:7,92,85;--label-align:center;--label-text-align:center }#comp-lav4uuse { height:auto }#comp-l8ppmp49 { height:auto }#comp-l8ppl4e0 { height:auto }#comp-l8ppl4e6 { height:auto }#comp-l9ebxgsh { --rd:50px 50px 50px 50px;--trans1:border-color 0.4s ease 0s, background-color 0.4s ease 0s;--shd:0.03px 1.00px 14px 4px rgba(255,255,255,0.6);--fnt:normal normal normal 15px/1.4em wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular;--trans2:color 0.4s ease 0s;--txt:255,255,255;--brw:0px;--bg:13,184,170;--brd:171,5,53;--bgh:255,245,240;--brdh:237,21,102;--txth:13,184,170;--bgd:204,204,204;--alpha-bgd:1;--brdd:204,204,204;--alpha-brdd:1;--txtd:255,255,255;--alpha-txtd:1;--alpha-txt:1;--alpha-brdh:1;--alpha-brd:0;--alpha-txth:1;--alpha-bg:1;--alpha-bgh:1;--shc-mutated-brightness:7,92,85;--label-align:center;--label-text-align:center }#comp-l8pnmqsw { height:auto }#comp-l8pnmqt4 { height:auto }#comp-l8pnmqt7 { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px }#comp-l8pnrc25 { height:auto }#comp-l8pnrc29 { height:auto }#comp-l8pnrc2d { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px }#comp-l8pnvins { height:auto }#comp-l8pnvinx { height:auto }#comp-l8pnvio1 { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px }#comp-l8pnphdf { height:auto }#comp-l8pnphdj { height:auto }#comp-l8pnphdp { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px }#comp-l8pnsrx3 { height:auto }#comp-l8pnsrx7 { height:auto }#comp-l8pnsrxc { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat }#comp-l8pnyakb { height:auto }#comp-l8pnyaki { height:auto }#comp-l8pnyakn { --rd:12px 12px 12px 12px;--shd:none;--brd:var(--color_11);--brw:0px;--sizeRd:12px 12px 12px 12px;--sizeBrw:0px;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--boxShadowToggleOn-shd:none;--alpha-brd:1;--height:206px;--width:176px }#comp-lav4uust { --shd:none;--brw:0px;--brd:255,255,255;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--alpha-brd:1;--boxShadowToggleOn-shd:none;--height:217px;--width:216px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat }#comp-lav4uusy { height:auto }#comp-lav4uut2 { height:auto }#comp-lav4uutb { --shd:none;--brw:0px;--brd:255,255,255;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--alpha-brd:1;--boxShadowToggleOn-shd:none;--height:217px;--width:216px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat }#comp-lav4uutf { height:auto }#comp-lav4uutj { height:auto }#comp-lav4uuts { --shd:none;--brw:0px;--brd:255,255,255;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--alpha-brd:1;--boxShadowToggleOn-shd:none;--height:217px;--width:210px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat }#comp-lav4uutx { height:auto }#comp-lav4uuu1 { height:auto }#comp-lav4uuua { --shd:none;--brw:0px;--brd:255,255,255;--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingBottom:0px;--contentPaddingTop:0px;--alpha-brd:1;--boxShadowToggleOn-shd:none;--height:217px;--width:211px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat }#comp-lav4uuue { height:auto }#comp-lav4uuui { height:auto }#c7d0t { width:auto;min-height:953px }#comp-l8pkooyy { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l9876gph { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8pkwvbj { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8pl1mev { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8plab53 { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8plnspu { --shd:0 0 0 rgba(0, 0, 0, 0.6);--dotsColor:232,230,230;--dotsSelectedColor:255,255,255;--arrowColor:232,230,230;--rd:0px;--brw:0px;--brd:var(--color_11);--alpha-brd:1;--alpha-dotsSelectedColor:1;--alpha-arrowColor:1;--alpha-dotsColor:1;height:460px;--nav-dot-section-display:block;--nav-dot-section-bottom-margin:50px;--nav-dot-margin:6px;--nav-dot-size:6px;--nav-dot-size-selected:6px;--nav-button-width:18px;--nav-button-offset:100px;--nav-button-display:block;--slides-overflow:visible;--transition-duration:1000ms }#comp-l8pmq2q0 { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8pn2euo { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8pnar78 { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--divider-top-image:url("data:image/svg+xml,%3Csvg id='comp-l8pnar78-top' preserveAspectRatio='none' data-bbox='0 100 1920 200' viewBox='0 100 1920 200' height='100%25' width='100%25' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cdefs%3E%3Cstyle%3E%23comp-l8pnar78-top %7B fill: %230DB8AA; %7D%3C/style%3E%3C/defs%3E%3Cg%3E%3Cpath d='M1920 300 0 100v200h1920z'/%3E%3C/g%3E%3C/svg%3E");--divider-top-size:100.00% 100%;--divider-top-height:20px;--divider-top-offset-x:0px;--divider-top-color:#0DB8AA;--divider-top-opacity:1;--divider-top-flip:scale(-1, -1);--divider-top-layers-pin-factor:0;--divider-top-filter:none;--divider-top-layer-1-display:none;--divider-top-layer-2-display:none;--divider-top-layer-3-display:none;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8poes30 { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-lav4uukd { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8ppfik8 { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-l8ppl49g { --shd:0 0 0 rgba(0, 0, 0, 0.6);--dotsColor:232,230,230;--dotsSelectedColor:255,255,255;--arrowColor:232,230,230;--rd:0px;--brw:0px;--brd:var(--color_11);--alpha-brd:1;--alpha-dotsSelectedColor:1;--alpha-arrowColor:1;--alpha-dotsColor:1;height:507px;--nav-dot-section-display:none;--nav-dot-section-bottom-margin:50px;--nav-dot-margin:6px;--nav-dot-size:6px;--nav-dot-size-selected:6px;--nav-button-width:18px;--nav-button-offset:100px;--nav-button-display:none;--slides-overflow:visible;--transition-duration:1000ms }#comp-l8pkop4m { --bg-overlay-color:transparent;--bg-gradient:none;--fill-layer-image-opacity:1;width:100%;--column-width:980px;--column-flex:980 }#comp-l98770n4 { --bg-overlay-color:rgb(var(--color_12));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pkwveu { --bg-overlay-color:rgb(250, 250, 250);--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pl1mj2 { --bg-overlay-color:rgb(29, 66, 102);--bg-gradient:none;--fill-layer-image-opacity:0.41;width:100%;--column-width:980px;--column-flex:980 }#comp-l8plabp0 { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pmq2v3 { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pn2exv { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pnaram { --bg-overlay-color:transparent;--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8poes6t { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-lav4uus6 { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8ppfioj { --bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;width:100%;--column-width:980px;--column-flex:980 }#comp-l8pnmqna { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-l8pnrbxz { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-l8pnvil2 { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-l8pnphaq { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-l8pnsrub { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-l8pnyafl { --brw:0px;--brd:13,184,170;--bg:255,255,255;--rd:12px 12px 12px 12px;--shd:0.00px 1.00px 12px 2px rgba(13,184,170,0.22);--alpha-brd:1;--alpha-bg:1;--shc-mutated-brightness:128,128,128 }#comp-lav4uusi { --bg-overlay-color:transparent;--bg-gradient:none;--padding:0px;--margin:0px;min-width:980px;--firstChildMarginTop:-1px;--lastChildMarginBottom:-1px;--items-direction:row }#comp-lav4uuso { --bg-overlay-color:transparent;--bg-gradient:none;width:100%;--column-width:251px;--column-flex:251 }#comp-lav4uut5 { --bg-overlay-color:transparent;--bg-gradient:none;width:100%;--column-width:243px;--column-flex:243 }#comp-lav4uutn { --bg-overlay-color:transparent;--bg-gradient:none;width:100%;--column-width:243px;--column-flex:243 }#comp-lav4uuu4 { --bg-overlay-color:transparent;--bg-gradient:none;width:100%;--column-width:243px;--column-flex:243 }#pageBackground_c7d0t { --bg-position:absolute;--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none }#comp-l8plntee { position:absolute;width:100%;height:100%;--bg-overlay-color:rgb(29, 66, 102);--bg-gradient:none }#comp-l8plntet { position:absolute;width:100%;height:100%;--bg-overlay-color:rgb(29, 66, 102);--bg-gradient:none }#comp-l8ppl4du { position:absolute;width:100%;height:100%;--bg-overlay-color:rgb(29, 66, 102);--bg-gradient:none }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnmqv8 .style-lav4hqb0__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnmqv8 .style-lav4hqb0__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnmqv8 .style-lav4hqb0__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnrc2i .style-lav4i5rs__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnrc2i .style-lav4i5rs__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnrc2i .style-lav4i5rs__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnrc2i .style-lav4i5rs__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnrc2i .style-lav4i5rs__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnrc2i .style-lav4i5rs__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnrc2i .style-lav4i5rs__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnrc2i .style-lav4i5rs__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnrc2i .style-lav4i5rs__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnrc2i .style-lav4i5rs__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnvio5 .style-lav4jh92__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnvio5 .style-lav4jh92__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnvio5 .style-lav4jh92__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnvio5 .style-lav4jh92__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnvio5 .style-lav4jh92__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnvio5 .style-lav4jh92__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnvio5 .style-lav4jh92__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnvio5 .style-lav4jh92__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnvio5 .style-lav4jh92__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnvio5 .style-lav4jh92__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnphdu .style-lav4ha26__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnphdu .style-lav4ha26__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnphdu .style-lav4ha26__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnphdu .style-lav4ha26__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnphdu .style-lav4ha26__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnphdu .style-lav4ha26__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnphdu .style-lav4ha26__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnphdu .style-lav4ha26__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnphdu .style-lav4ha26__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnphdu .style-lav4ha26__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnsrxh .style-lav4io2e__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnsrxh .style-lav4io2e__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnsrxh .style-lav4io2e__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnsrxh .style-lav4io2e__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnsrxh .style-lav4io2e__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnsrxh .style-lav4io2e__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnsrxh .style-lav4io2e__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnsrxh .style-lav4io2e__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnsrxh .style-lav4io2e__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnsrxh .style-lav4io2e__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }/* END STYLABLE DIRECTIVE RULES */

        #comp-l8pnyaks .style-lav4krj2__root{
            -st-extends: StylableButton;
            transition: all 0.2s ease, visibility 0s;
            padding: 3px; /*inset 3.54px 3.54px 0 -64px value(site_1_1)*/ border-radius: 50px; border: 0px solid rgb(63, 118, 82); background: #0DB8AA
        }

        /* START STYLABLE DIRECTIVE RULES */

        #comp-l8pnyaks .style-lav4krj2__root:hover{
            border: 0px solid rgb(63, 118, 82);
            background: #1D4266
        }

        #comp-l8pnyaks .style-lav4krj2__root:hover .StylableButton2545352419__label{
            color: #FFFFFF
        }

        #comp-l8pnyaks .style-lav4krj2__root:disabled{
            background: #E2E2E2;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0)
        }

        #comp-l8pnyaks .style-lav4krj2__root:disabled .StylableButton2545352419__label{
            color: #8F8F8F
        }

        #comp-l8pnyaks .style-lav4krj2__root:disabled .StylableButton2545352419__icon{
            fill: #8F8F8F
        }

        #comp-l8pnyaks .style-lav4krj2__root .StylableButton2545352419__container{
            transition: inherit
        }

        #comp-l8pnyaks .style-lav4krj2__root .StylableButton2545352419__label{
            transition: inherit;
            margin: 0px 4px 0px 0px;
            color: #FFFFFF; font-family: wfont_899dc0_b19d6427c86943329ddb29bc22aaa1b7,wf_b19d6427c86943329ddb29bc2,orig_daxlineproregular; font-size: 13px; font-weight: normal; font-style: normal;
            font-size: 14px;
            letter-spacing: 0.15em
        }

        #comp-l8pnyaks .style-lav4krj2__root .StylableButton2545352419__icon{
            transition: inherit;
            margin: 0px 0px 0px 4px;
            fill: #FFFFFF;
            width: 37px;
            height: 37px;
            display: none
        }

        #comp-l8pnyaks .style-lav4krj2__root:hover .StylableButton2545352419__icon{
            fill: #FFFFFF;
            width: 42px;
            height: 42px
        }

        #comp-l8ponqo3 {
            position: relative;
            left: 140px;
            grid-area: 2 / 1 / 3 / 2;
        }

        .get-in-touch {
            transition: all 0.2s ease;
            padding: 8px 20px;
            border-radius: 50px;
            border: 0px solid rgb(63, 118, 82);
            background: #0DB8AA;
            color: white;
            font-size: 17px;
            font-weight: bold;
        }
        </style>
    @stop

    @section('content')
        <x-navigation-bar />

        <template>
            <div style="height: 80vh" class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
                <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
                    <svg class="absolute left-7 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
                        <path d="M50 0H100L50 100H0L50 0Z"></path>
                    </svg>
                    <img
                        class="object-cover w-full h-56 rounded lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
                        src="/images/starai.png"
                        alt=""
                    />
                </div>
                <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
                    <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
                        <h2 class="mb-5 font-normal leading-10 font-patua text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                            Elevate Your Health with Virtual Care: Uniquely
                            <span class="inline-block text-deep-purple-accent-400 font-normal font-patua text-indigo-600">Tailored for You</span>
                        </h2>
                        <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                            We believe in putting your health first. Our virtual care is uniquely designed to cater to your individual needs, ensuring a personalized and convenient healthcare experience.
                        </p>
                        <div class="flex items-center">
                            <div class="col-lg-12 more-detail-buttons ">
                                <button type="button" class="text-white font-patua font-normal bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 mr-2 mb-2">
                                    Request a Demo
                                </button>
                                <a href="{{ route('get.download') }}">
                                    <button type="button" class="text-gray-900 font-patua font-normal bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                        Download The app
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template>
            <div style="margin-top: 50px !important" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                    <div>
                    <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        Our Pledge to You
                    </p>
                    </div>
                    <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                        <span class="relative inline-block">
                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                            </svg>
                            <span class="relative font-patua font-normal">Elevating</span>
                        </span>
                        Your Wellness - Your Journey, Our Commitment
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                        Discover the Vitaway difference as we pledge to provide you with the highest quality healthcare solutions,
                        personalized to your unique well-being.
                    </p>
                </div>
                <div class="grid max-w-screen-xl gap-8 lg:grid-cols-2 sm:mx-auto" style="margin-top: 30px">
                    <div class="flex flex-col justify-center">
                        <div class="flex">
                            <div class="mr-4">
                                <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-indigo-50">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-2 font-semibold leading-5">
                                    Your Health and Time Matter that Committed to Your Best Life
                                </h6>
                                <p class="text-sm text-gray-900">
                                    At Vitaway + , your health and time matter. We are committed to helping you live your best life. We offer accessible, convenient care for your busy lifestyle.
                                </p>
                                <hr class="w-full my-6 border-gray-300" />
                            </div>
                        </div>
                        <div class="flex">
                            <div class="mr-4">
                                <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-indigo-50">
                                    <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                    <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-2 font-semibold leading-5">
                                    Our Formula for Lasting Health Transformation
                                </h6>
                                <p class="text-sm text-gray-900">
                                    We employ leading-edge science, personal health management and ongoing support to provide lasting changes.
                                </p>
                                <hr class="w-full my-6 border-gray-300" />
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <img class="object-cover w-full h-56 col-span-2 rounded" src="/images/Team/bg-1.jpeg" alt="" />
                        {{-- <img class="object-cover w-full h-48 rounded" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                        <img class="object-cover w-full h-48 rounded" src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" /> --}}
                    </div>
                </div>
            </div>
        </template>

        {{-- Our values --}}
        <template>
            <div class="relative px-4 pt-5 pb-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pt-15 lg:pb-20">
                <div class="absolute inset-x-0 top-0 items-top justify-center hidden overflow-hidden md:flex md:inset-y-0">
                    <svg viewBox="0 0 88 88" class="w-full max-w-screen-xl text-blue-200">
                        <circle fill="currentColor" cx="44" cy="44" r="15.5"></circle>
                        <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="44"></circle>
                        <circle fill-opacity="0.2" fill="currentColor" cx="44" cy="44" r="37.5"></circle>
                        <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="29.5"></circle>
                        <circle fill-opacity="0.3" fill="currentColor" cx="44" cy="44" r="22.5"></circle>
                    </svg>
                </div>
                <div>
                    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12 z-40 relative">
                        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                            <div>
                            <p class="inline-block font-patua font-normal px-3 py-px mb-4 text-xs tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                                Brand new
                            </p>
                            </div>
                            <h2 class="max-w-lg font-patua font-normal mb-6 font-sans text-3xl leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                                <span class="relative inline-block">
                                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-9 -right-1 z-0 hidden w-28 -mt-8 -ml-20 text-blue-gray-100 lg:w-28 lg:-ml-28 lg:-mt-10 sm:block">
                                    <defs>
                                        <pattern id="18302e52-9e2a-4c8e-9550-0cbb21b38e55" x="0" y="0" width=".135" height=".30">
                                        <circle cx="1" cy="1" r=".7"></circle>
                                        </pattern>
                                    </defs>
                                    <rect fill="url(#18302e52-9e2a-4c8e-9550-0cbb21b38e55)" width="52" height="24"></rect>
                                    </svg>
                                    <span class="relative font-patua font-normal">The</span>
                                </span>
                                Our Guiding Values that Inspiring Integrity and Dedication, Every Day.
                            </h2>
                            <p class="text-base text-gray-700 md:text-lg font-merri font-normal">
                                These six values give us the courage to do the right thing for our members, partners, and each other, every day.
                            </p>
                        </div>
                    </div>
                    <div class="relative grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                        <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                            <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                            </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-bold">Start with Trust </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We listen closely, and we operate with kindness. We provide respectful and candid feedback to each other.
                            </p>
                        </div>
                        <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-bold">SEEK CONTEXT</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We ask to understand, and we build connections. We do our research up front to move faster down th road.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 font-bold text-gray-800">Act Boldly</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We innovate daily to solve problems, improve processes, and find new opportunities for our members and customers.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-bold">Deliver Results </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We reward impact above output. We set a high bar. We’re not afraid to fail, and we take pride in our work.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-bold">Succeed Together </p>
                            <p class="text-sm leading-5 text-gray-900">
                                We prioritize Vitaway’s progress over team or self. We have fun as we get stuff done, and we celebrate together.
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>

                        <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded-[20px] shadow-sm group hover:shadow-2xl" style="border: 1px solid #e7dfd7">
                            <div class="p-4">
                            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
                                <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                </svg>
                            </div>
                            <p class="mb-2 text-gray-800 font-bold">Remember Why we’re Here</p>
                            <p class="text-sm leading-5 text-gray-900">
                                We push through the challenges of changing healthcare because we know the destination is worth it
                            </p>
                            </div>
                            <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        {{-- Gallerry --}}
        <template>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
                    <h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                    <span class="inline-block mb-1 sm:mb-4 font-patua font-normal leading-10">
                        Real people who have experienced positive changes in their lives through Vitaway
                    </span>
                    <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
                    </h2>
                    <p class="text-gray-700 lg:text-md leading-6 lg:max-w-md font-patua font-normal">
                        Where our healthcare journey comes to life. Take a visual tour through the heart of our startup and discover the world of innovative solutions and compassionate care that define us.
                    </p>
                </div>

                <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
                    <a href="/" aria-label="View Item">
                        <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                            <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="/images/team/bg.jpeg" alt="" />
                            <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                            <p class="mb-4 text-lg font-bold text-gray-100">Mona Lisa</p>
                            <p class="text-sm tracking-wide text-gray-300">
                                Painted between 1503 and 1517, Da Vinci’s alluring portrait has been dogged by two questions since the day it was made: Who’s the subject and why is she smiling?
                            </p>
                            </div>
                        </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="/images/team/bg-1.jpeg" alt="" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                        <p class="mb-4 text-lg font-bold text-gray-100">The Starry Night</p>
                        <p class="text-sm tracking-wide text-gray-300">
                            Vincent Van Gogh’s most popular painting, The Starry Night was created by Van Gogh at the asylum in Saint-Rémy, where he’d committed himself in 1889.
                        </p>
                        </div>
                    </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.pexels.com/photos/3184339/pexels-photo-3184339.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                        <p class="mb-4 text-lg font-bold text-gray-100">The Kiss</p>
                        <p class="text-sm tracking-wide text-gray-300">
                            Opulently gilded and extravagantly patterned, The Kiss, Gustav Klimt’s fin-de-siècle portrayal of intimacy, is a mix of Symbolism and Vienna Jugendstil, the Austrian variant of Art Nouveau.
                        </p>
                        </div>
                    </div>
                    </a>
                    <a href="/" aria-label="View Item">
                    <div class="relative overflow-hidden transition duration-200 transform rounded hover:-translate-y-2 hover:shadow-2xl">
                        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
                        <div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                        <p class="mb-4 text-lg font-bold text-gray-100">The Harvesters</p>
                        <p class="text-sm tracking-wide text-gray-300">
                            Bruegel’s fanfare for the common man is considered one of the defining works of Western art. This composition was one of six created on the theme of the seasons.
                        </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </template>

        {{-- Reach Out --}}
        <template>
            <div class="overflow-hidden bg-gray-900">
              <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="flex flex-col items-center justify-between xl:flex-row">
                  <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-normal font-patua tracking-tight text-white sm:text-4xl sm:leading-none">
                        Fastest Way To Reach The Right Expert:
                        <span class="text-gray-400 font-normal font-patua">Fill Out The Form.</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base font-normal font-patua text-gray-400 md:text-lg">
                        After getting your message, we will forward it to appropriate person in the team who will get back to you shortly. Usually, we will reply within 24h (Mon-Fri).
                    </p>
                  </div>
                  <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="relative">
                      <svg viewBox="0 0 52 24" fill="currentColor" class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-gray-300 lg:w-32 lg:-mr-16 sm:block">
                        <defs>
                          <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                            <circle cx="1" cy="1" r=".7"></circle>
                          </pattern>
                        </defs>
                        <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
                      </svg>
                      <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
                        <h3 class="mb-4 text-xl font-normal font-patua sm:text-center sm:mb-6 sm:text-2xl">
                          Fill out the Form
                        </h3>
                        <form>
                          <div class="mb-1 sm:mb-2">
                            <label for="name" class="inline-block mb-1 font-normal font-patua">Firstname</label>
                            <input placeholder="Use Firstname" required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="name"
                              name="name"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">Lastname</label>
                            <input
                              placeholder="Use Lastname"
                              required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="lastname"
                              name="lastname"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">E-mail</label>
                            <input
                              placeholder="john.doe@example.org"
                              required=""
                              type="text"
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="email"
                              name="email"
                            />
                          </div>
                          <div class="mb-1 sm:mb-2">
                            <label for="email" class="inline-block mb-1 font-normal font-patua">Message</label>
                            <textarea
                              placeholder="Write a Message..."
                              class="flex-grow w-full h-12 px-4 mb-2 font-normal font-patua transition duration-200 bg-white border border-gray-300 rounded appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                              id="message"
                              name="message"
                            ></textarea>
                          </div>
                          <div class="mt-4 mb-2 sm:mb-4">
                            <button
                              type="submit"
                              class="inline-flex items-center justify-center w-full h-12 px-6 font-normal font-patua tracking-wide text-white transition duration-200 rounded bg-indigo-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                            >
                              Submit
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </template>

        <x-footer />
    @stop

    @section('scripts') @stop
