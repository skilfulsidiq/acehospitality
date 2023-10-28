<style>
    /*
    The styles here for use when generating a PDF invoice with the HTML code.

    * Set up a repeating page counter
    * Place the .footer-info in the last page's footer
    */

    .footer {
    margin-top: 30px;
    }

    .footer-info {
    float: none;
    position: running(footer);
    margin-top: -25px;
    }

    .page-container {
    display: block;
    position: running(pageContainer);
    margin-top: -25px;
    font-size: 12px;
    text-align: right;
    color: #999;
    }

    .page-container .page::after {
    content: counter(page);
    }

    .page-container .pages::after {
    content: counter(pages);
    }


    @page {
    @bottom-right {
    content: element(pageContainer);
    }
    @bottom-left {
    content: element(footer);
    }
    }

    .summary-row{
        /* border-bottom: 1px solid #ddd; */
    }
    .summary-title {
    text-align: left;
    color: ##6c757d;

    padding: 10px 0 15px 0;
    font-size: 0.75em;
    text-transform: uppercase;
    }
</style>
