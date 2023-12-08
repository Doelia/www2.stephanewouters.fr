<style>
    .container {
        max-width: 1000px;
    }

    .category-icon {
        height: 40px;
        width: 40px;
    }
    .category-icon i {
        line-height: 40px;
    }

    /* a href undeline effect */
    .text-hover-animated {
        background: linear-gradient(to right, #ffee83 50%, transparent 50%);
        transition: background 0.2s ease;
        background-size: 200% 100%;
        background-position: right bottom;
    }
    .text-hover-animated:hover {
        background-position: left bottom;
    }

    /* Category color effect */
    .category-icon {
        transition: background-color 0.2s ease;
    }
    .category-hover:hover .category-icon {
        background-color: #ffee83 !important;
    }

    /* Category icon zoom effect */
    .category-hover .category-icon i {
        transition: font-size 0.2s ease;
    }
    .category-hover:hover .category-icon i {
        font-size: 20px;
    }

    /* border left effect */
    .category-hover .border-start {
        position: relative;
    }
    .category-hover .border-start:before {
        content: '';
        position: absolute;
        height: 0;
        width: 1px;
        background: black;
        top: 0;
        left: 0;
        transition: height 0.2s ease;
        opacity: .5;
    }
    .category-hover:hover .border-start:before {
        height: 100%;
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

    .text-bg-yellow { background: #F8F9FA; }

    .bg-opacity-90 { --bs-bg-opacity: 0.90; }

</style>
