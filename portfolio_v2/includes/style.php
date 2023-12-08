<style>
    .container {
        max-width: 1000px;
    }

    .text-hover-animated {
        background: linear-gradient(to right, #ffee83 50%, transparent 50%);
        transition: background 0.2s ease;
        background-size: 200% 100%;
        background-position: right bottom;
    }

    .text-hover-animated:hover {
        background-position: left bottom;
    }

    .icon-hover-animated {
        opacity: .75;
        transition: background 0.2s ease;
    }

    .icon-hover-animated:hover {
        opacity: 1;
        background: #ffee83;
    }

    .bg-opacity-90 {
        --bs-bg-opacity: 0.90;
    }

    .grayscale-hover-effect {
        /*filter: grayscale(100%);*/
        transition: filter 0.2s ease;
    }

    .grayscale-hover-effect:hover {
        filter: grayscale(0%);
    }

    .text-bg-yellow {
        background: #F8F9FA;
        /*color: #424200;*/
    }

    .bg-react { background: #087EA4; }
    .bg-html { background: #E65C26; }
    .bg-mercure { background: #66C2DB; }
    .bg-postgres { background: #336791; }
    .bg-aws { background: #FF9900; }
    .bg-docker { background: #0DB7ED; }
    .bg-openlayers { background: #1F6B75; }
    .bg-vuejs { background: #41B883; }
    .bg-nodejs { background: #026E00; }
    .bg-java { background: #E41F1F; }
    .bg-js { background: #F7DF1E; }
    .bg-golang { background: #00ADD8; }
    .bg-php { background: #777BB4; }
    .bg-jquery { background: #0769AD; }
    .bg-angular { background: #DD0031; }
    .bg-python { background: #3776AB; }
    .bg-leaflet { background: #199900; }
    .bg-graphql { background: #E10098; }
    .bg-bootstrap { background: #6F2CF6; }

</style>
