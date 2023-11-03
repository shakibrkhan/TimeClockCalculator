<style type="text/css">
    span#total_overtime { text-transform: capitalize; color: #000; font-size: 15px; border-radius: 5px; }
    .custom_content_instructions h5 { margin-top: 0 !important; }
    .custom_content_instructions ul { margin: 0 !important; }
    .custom_content_instructions ul li { font-size: 16px !important; margin-bottom: 10px !important; }
    .custom_content_instructions p { font-size: 16px !important; }
    .custom_calculator_heading { text-align: center; }
    .wco-weekly-footer button.brown-btn.custom-brown-btn { width: auto; padding: 0 10px; background: #54556a; font-size: 16px; text-transform: capitalize; }
    .wco-container {
        width: 100%;
        max-width: 882px;
        margin: 0 auto;
        padding: 25px 0px;
        position: relative;
        overflow: hidden;
    }
    .wco-weekly-lunch-col:first-child .wco-weekly-col-2, .wco-weekly-lunch-col:first-child .wco-weekly-col-3, .wco-weekly-lunch-col:first-child .wco-weekly-col-4, .wco-weekly-lunch-col:first-child .wco-weekly-col-5, .wco-weekly-lunch-col:first-child .wco-weekly-col-6 {
        padding-top: 20px !important;
    }
    .wco-weekly-lunch-col:first-child .wco-weekly-col-1 {
        padding-top: 20px !important;
    }
    .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-1, .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-2, .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-3, .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-4, .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-5, .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-6 {
        padding-bottom: 20px !important;
    }
    h3.wco-time-calculator-title {
        font-size: 24px !important; 
        line-height: 32px !important;
        color: #000000 !important;
        margin: 0 0 15px;
        text-transform: uppercase;
        font-family: 'Open Sans', sans-serif !important;
    }
    .wco-weekly-header {
        background-color: #04a6f4;
        /* padding: 20px 0 0; */
        clear: both;
    }
    .wco-weekly-header ul {
        margin: 0 !important;
        width: 100%;
        background-color: #04a6f4;
        padding: 16px 5px 0px;
        padding-left: 25px !important;
    }
    .wco-weekly-header ul li {
        display: inline-block;
        font-size: 22px;
        line-height: 32px;
        font-family: 'Open Sans', sans-serif !important;
        margin-bottom: 0 !important;
        margin-left: 1px;
    }
    .wco-weekly-header ul li span {
        width: 50px;
        padding: 2px 5px;
        border-radius: 12px 12px 0 0;
        background-color: #fff;
        display: block;
        font-weight: 500;
        color: #000;
        font-family: 'Open Sans', sans-serif !important;
        text-align: center;
        font-size: 15px;
    }
    .wco-weekly-header ul li:nth-child(6) span{
        width: 65px !important;
    }
    .lightGrayBg {
        background-color: #f5f6f6 !important;
    }
    .wco-weekly-header ul li:nth-child(1){
        width: 41px;
    }
    .wco-weekly-header ul li:nth-child(2){
        width: 160px;
    }
    .wco-weekly-header ul li:nth-child(3),.wco-weekly-header ul li:nth-child(4){
        width: 160px;
    }
    .wco-weekly-header ul li:nth-child(5){
        width: 160px;
    }
    .wco-container .card-calculator {
        background-color: #ffffff !important;
        background: linear-gradient(to bottom, #fff 0%, #fff 50%, #fff 100%) !important;
        
    }
    .wco-weekly-calculator .weekly-lunch {
        padding: 0 !important;
    }
    .wco-weekly-calculator .wco-weekly-col-1 {
        width: 100%;
        max-width: 65px;
        display: inline-block;
        vertical-align: middle;
        text-align: left;
        padding: 6px 10px;
    }
    .wco-weekly-calculator .wco-weekly-col-1 span {
        font-size: 15px !important;
        color: #000000 !important;
        font-weight: 400 !important;
        font-family: 'Open Sans', sans-serif !important;
        text-transform: uppercase;
    }
    .wco-weekly-calculator .wco-weekly-col-2, .wco-weekly-calculator .wco-weekly-col-3, .wco-weekly-calculator .wco-weekly-col-4,
    .wco-weekly-calculator .wco-weekly-col-5 {
        width: 100%;
        max-width: 160px;
        display: inline-block;
        vertical-align: top;
        padding: 6px 0;
        text-align: center;
    }
    .wco-weekly-col-4, .wco-weekly-col-2 {
        background-color: #f5f6f6 !important;
    }
    .wco-weekly-col-6 {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        max-width: 169px;
        background-color: #f5f6f6 !important;
    }
    .wco-weekly-col-6.wcoTotalLast {
        padding: 6px 0 15px !important;
        text-align: left !important;
        vertical-align: middle;
    }
    .wco-weekly-col-6 .wcoTotalLast-Desktop {
        display: flex;
    }
    .wcoTotalLast-Desktop .gray_inputbox {
        width: 65px;
        height: 21px;
        line-height: 21px;
    }
    .wco-weekly-col-6 .total {
        margin: 0 !important;
        float: unset;
        text-align: center !important;
    }
    .wco-weekly-col-6 .total input[type="text"] {
        font-size: 20px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 28px;
        height: 44px;
        width: 122px !important;
        border: 0px solid #d2d2d2 !important;
        text-align: center;
        border-radius: 5px;
        color: #000 !important;
        background-color: #f5f6f6 !important;
        font-weight: 400 !important;
    }
    .wco-weekly-col-2 input[type="tel"], .wco-weekly-col-3 input[type="tel"], .wco-weekly-col-4 input[type="tel"], .wco-weekly-col-5 input[type="tel"] {
        font-size: 15px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 28px;
        height: 30px;
        width: 32px;
        border: 1px solid #d2d2d2;
        text-align: center;
        border-radius: 5px;
    }
    .wco-dot {
        padding: 0 1px;
        font-size: 15px;
        line-height: 28px;
        vertical-align: middle;
        font-family: 'Open Sans', sans-serif !important;
    }
    .wco-weekly-col-2 div.selector, .wco-weekly-col-3 div.selector, .wco-weekly-col-4 div.selector, .wco-weekly-col-5 div.selector {
        height: 46px !important;
        width: 62px !important;
        border-radius: 5px;
        border: 2px solid #d2d2d2 !important;
        padding: 0 0 0 6px;
    }
    .wco-weekly-col-2 div.selector select, .wco-weekly-col-3 div.selector select, .wco-weekly-col-4 div.selector select, .wco-weekly-col-5 div.selector select {
        font-size: 18px !important;
        font-family: 'Open Sans', sans-serif !important;
        color: #000 !important;
        line-height: 28px !important;
        height: 46px !important;
        width: 62px !important;
        border: 2px solid #d2d2d2 !important;
        text-align: center;
        border-radius: 5px;
        padding: 0 0 0 6px;
    }
    .wco-weekly-col-2 div.selector span, .wco-weekly-col-3 div.selector span, .wco-weekly-col-4 div.selector span, .wco-weekly-col-5 div.selector span {
        font-size: 18px !important;
        font-family: 'Open Sans', sans-serif !important;
        color: #000 !important;
        text-shadow: none  !important;
        font-weight: 400  !important;
        height: 43px;
        line-height: 23px;
        padding: 10px 20px 10px 0px !important;
        background: url(../images/wco-combo.jpg) right 0 no-repeat;
    }
    .wco-weekly-total {
        background-color: #04a6f4;
        padding: 12px 10px;
        clear: both;
        text-align: center;
        margin-bottom: 20px;
    }
    .wco-weekly-total div:nth-child(2), .wco-weekly-total div:nth-child(4) {
        color: #fff;
    }
    .wco-weekly-total div:nth-child(5) {
        border-top: 1px solid;
        margin-top: 10px;
        padding-top: 10px;
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }
    .wco-weekly-total-title {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        max-width: 690px;
        font-size: 18px;
        font-family: 'Open Sans', sans-serif !important;
        color: #FFFFFF;
        padding: 10px 0 0 0;
        text-transform: uppercase;
    }
    .wcoTotalLast-Desktop span.wcoTotalLine .gray_inputbox {
        padding-left: 10px;
    }
    .wco-weekly-text {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        max-width: 166px;
        text-align: right;
    }
    input[type="text"].yallow-input {
        float: unset !important;
        font-size: 20px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 28px;
        width: 70px;
        height: auto;
        text-align: center;
        border-radius: 5px;
        vertical-align: middle;
        background-color: transparent;
        border: none !important;
        font-weight:400 !important;
    }
    .wco-weekly-calculator .wco-weekly-text .listfield.enter.gray_inputbox {
        width: 100%;
        max-width: 38px;
        height: 46px;
        display: inline-block;
        padding: 0 !important;
        text-align: left;
        color: #fff !important;
        font-size: 18px !important;
        font-weight: 400 !important;
    }

    .wco-weekly-calculator .wco-weekly-text .listfield.enter.gray_inputbox {
        border-right: 1px solid #fff !important;
        border-radius: 0;
    }
    .wco-weekly-calculator .wco-weekly-text span.TotalTimeinputbox .listfield.enter.gray_inputbox {
        display: inline-block;
        vertical-align: top;
        max-width: 55px;
    }
    span.DecimalinputboxDec{
        color: #fff;
        font-size: 14px !important;
    }

    .wco-weekly-calculator .wco-weekly-text .listfield.enter.yallow-input {
        border-right: none !important;
        font-size: 14px !important;
        padding-left: 3px !important;
    }
    .wco-weekly-calculator .wco-weekly-text .hr-text-pl{
        padding-left: 5px;
        display: inline-block;
        vertical-align: middle;
        padding-top: 2px;
    }
    .wco-weekly-footer-section {
        background-color: #f5f6f6;
        widows: 100%;
        padding: 20px;
    }
    .wco-weekly-footer-col-1 {
        width: 100%;
        max-width: 270px;
        display: inline-block;
        vertical-align: top;
    }
    .wco-weekly-footer-col-2 {
        width: 100%;
        max-width: 270px;
        display: inline-block;
        vertical-align: top;
    }
    .wco-weekly-footer-col-3 {
        width: 100%;
        max-width: 290px;
        display: inline-block;
        vertical-align: top;
    }
    .wco-weekly-footer button.gray-btn {
        background-color: #a09f9f;
        color: #FFFFFF;
        font-size: 16px;
        font-family: 'Open Sans', sans-serif !important;
        text-align: left;
        border: none;
        width: 135px;
        height: 45px;
        line-height: 45px;
        padding: 0 0 0 10px;
        font-weight: 400;
        margin: 0 15px 8px 0;
        display: inline-block;
        vertical-align: top;
        border-radius: 6px;
    }
    .wco-weekly-footer button.brown-btn {
        background-color: #04a6f4;
        color: #FFFFFF;
        font-family: 'Open Sans', sans-serif !important;
        font-size: 16px;
        line-height: 28px;
        padding: 8px 15px;
        text-align: center;
        border: none;
        width: 138px;
        height: 45px;
        font-weight: 400;
        margin:0 7px 5px 0;
        display: inline-block;
        vertical-align: top;
        border-radius: 6px;
        text-transform: uppercase;
        cursor: pointer;
    }
    .wco-weekly-footer button.brown-btn:hover {
        background-color: #a09f9f;
        color: #FFFFFF;
    }
    .wco-weekly-footer-col-3 button.brown-btn:nth-child(even) {
        margin-right: 0;
    }
    .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input {
        color: #000;
        font-size: 16px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 28px;
        padding: 8px 15px 8px 24px;
        text-align: left;
        border: 2px solid #d2d2d2 !important;
        width: 130px;
        font-weight: 400;
        margin: 0 0 8px -10px;
        display: inline-block;
        vertical-align: top;
        float: unset !important;
        border-radius: 6px;
        height: 45px;
        background-color: #fff !important;
    }
    .wco-weekly-footer input[type="tel"].lightGryaBg, .wco-weekly-footer input[type="text"].lightGryaBg {
        background-color: #EEEEEE !important;
    }
    .right-margin-na {
        margin-right: 0 !important;
    }
    .wco-weekly-footer i {
        position: relative;
        margin-right: -15px;
        margin-top: 15px;
        margin-left: 0;
        font-size: 16px;
    }
    .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input {
        color: #a09f9f !important;
        font-size: 16px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 28px;
        padding: 10px 15px 10px 24px;
        text-align: left;
        border: 2px solid #d2d2d2 !important;
        width: 130px;
        font-weight: 400;
        margin: 0 0 8px -10px;
        display: inline-block;
        vertical-align: top;
        float: unset !important;
        border-radius: 6px;
        height: 45px;
        background-color: #fff !important;
    }

    .wco-weekly-email-section .email-box.wco-email-box {
        width: 100% !important;
        background-color: #fff !important;
        background: linear-gradient(to bottom, #fff 0%, #fff 100%);
        border: 2px solid #ddd;
        padding: 20px;
    }
    .wco-weekly-email-section .email-box-field {
        width: 100%;
        max-width: 450px;
        display: inline-block;
        vertical-align: top;
    }
    .wco-weekly-email-section .email-box-field label {
        color: #000 !important;
        font-size: 18px;
        line-height: 28px;
        width: 100%;
        max-width: 90px;
        font-family: 'Open Sans', sans-serif !important;
        padding-top: 8px;
        font-weight: 400;
    }
    .email-box-field input[type="email"] {
        width: 100%;
        max-width: 325px;
        display: inline-block;
        vertical-align: top;
        background-color: #fff !important;
        color: #000 !important;
        border: 2px solid #ddd;
        height: 46px;
        font-size: 18px;
        font-family: 'Open Sans', sans-serif !important;
        font-weight: 400;
        border-radius: 5px;
    }
    .email-box-field input[type="text"] {
        width: 100%;
        max-width: 325px;
        display: inline-block;
        vertical-align: top;
        background-color: #fff !important;
        color: #000 !important;
        border: 2px solid #ddd;
        height: 46px;
        font-size: 18px;
        font-family: 'Open Sans', sans-serif !important;
        font-weight: 400;
        border-radius: 5px; 
    }
    .wco-email-box-field.email-box-field {
        width: 100% !important;
        max-width: 100%;
        vertical-align: top;
        padding-top: 15px;
    }
    .wco-email-box-field.email-box-field button {
        background-color: #8aa92c;
        background: linear-gradient(to bottom, #8aa92c 0%, #8aa92c 100%);
        color: #FFFFFF;
        font-family: 'Open Sans', sans-serif !important;
        font-size: 20px;
        line-height: 28px;
        padding: 12px 15px;
        text-align: center;
        border: none;
        width: 170px;
        font-weight: 400;
        margin: 0 15px 8px 0;
        display: inline-block;
        vertical-align: top;
        border-radius: 6px;
        text-transform: uppercase;
        cursor: pointer;
    }
    .wco-email-box-field.email-box-field button:hover {
        background-color: #a09f9f;
        background: linear-gradient(to bottom, #a09f9f 0%, #a09f9f 100%);
        color: #FFFFFF;
    }
    .wco-mobile-in, .wco-mobile-out, .wco-mobile-total, .wco-mobile-green-border { display: none; }

    .radio-lable{
        color: #000000 !important;
    }

    .radio-lable input[type="radio"] {
      opacity: 0;
      position: fixed;
      width: 0;
    }
    .radio-lable {
        display: inline-block;
        background-color: #eeeeee;
        padding: 0px 4px;
        font-family: 'Open Sans', sans-serif !important;
        font-size: 14px !important;
        border: 1px solid #d2d2d2;
        border-radius: 5px;
        color: #000000;
        height: 30px;
        vertical-align: top;
        line-height: 30px !important;
    }
    .radio-lable:hover, .radio-lable-active {
      background-color: #a09f9f;
      color: #ffffff  !important;
      border: 1px solid #a09f9f;
    }
    .press-tab-title {
        font-size:11px !important;
        font-family:Arial, sans-serif !important;
        text-transform: uppercase !important;
        margin-bottom: 5px !important;
        font-weight:400 !important;
        color: #000000 !important;
    }

    /*------ Weekly Summary --------*/
    .wco-summary-mobile {
        display:none !important;
        background-color: #8aa92c;
        padding: 4px 0 4px;
        clear: both;
        margin-bottom: 12px;
    }
    .wco-summary-mobile-title {
        display: inline-block;
        vertical-align: top;
        width: 100%;
        max-width: 940px;
        font-size: 24px;
        font-family: 'Open Sans', sans-serif !important;
        line-height: 32px;
        color: #FFFFFF;
        padding: 7px 0 7px 15px;
        text-transform: uppercase;
    }
    .wco-summary-mobile-table {
        margin-bottom:20px;
        display:none !important;
    }
    .wco-summary-mobile-table table {
      background-color: #f2f2f2;
      width: 100%;
      border: 0;
    }
    .wco-summary-mobile-table table .top-medium-gray {
      text-align: left;
      background-color: #a09f9f;
      padding: 10px 25px 10px 6px;
      color: #fff;
      margin-bottom: 20px;
      clear: both;
      font-size: 24px;
      font-family: 'Open Sans', sans-serif !important;
    }
    .wco-summary-mobile-table table tr td {
      width: 100%;
    }
    .wco-summary-mobile-table table tr th {
      padding:15px;
    }
    .wco-summary-mobile-table table tr td {
      color: #000000 !important;
      font-weight: 400 !important;
      font-family: 'Open Sans', sans-serif !important;
      font-size: 13px !important;
      padding: 10px 5px;
      border-bottom: 1px solid #ccc;
    }
    .summary-am-title {
      font-size: 16px;
      font-family: 'Open Sans', sans-serif !important;
      font-weight: 400 !important;
    }
    .summary-number-title {
      font-size: 11px;
      font-family: 'Open Sans', sans-serif !important;
      font-weight: 400 !important;
    }
    .sum-total {
        float: right;
        font-weight: 700 !important;
        font-size: 18px;
    }
    .total-sum {
        float: right;
        font-weight: 700 !important;
        font-size: 14px;
    }
    .sum-apm {
        font-size: 10px !important;
        font-weight: 600 !important;
    }
    .sum-day {
        width: 18px;
        display: inline-block;
        background-color: #ddd;
        text-align: center;
        font-weight:700 !important;
    }
    .decimalInputBox, .topDecimalInput {
        display:none;
    }
    /* Zankhana css 09-11-22 Start */

    .wco-weekly-col-6 .total.wcoTotalLast-Mobile{
        display: none;
    }

    .gray_inputbox {
        border: none !important;
        background: transparent !important;
        font-size: 18px !important;
        color: #000 !important;
        font-family: 'Open Sans', sans-serif !important;
    }
    .wcoDecimalLine {
        color: #a09f9f !important;
        font-size: 14px !important;
    }
    .wcoDecimalLine .gray_inputbox {
        color: #a09f9f !important;
        font-size: 14px !important;
        width: 45px !important;
    }
    /* Zankhana css 09-11-22 End */
    /*------ End Weekly Summary --------*/
    .custom_wrap_btns {
        display: table;
        margin: 0 auto;
    }
    .custom_wrap_btns .custom-brown-btn {
        margin: 10px 10px;
        border: 1px solid #ddd;
        background: #04a6f4;
        border-radius: 5px;
        font-size: 16px;
        padding: 10px 20px;
        width: 270px;
        color: #FFF;
        height: 55px;
    }
    /*------Responsive-------*/
    @media (max-width: 1220px) {
        /* .wco-container { max-width: 975px; }
        .wco-weekly-calculator .wco-weekly-col-1, .wco-weekly-header ul li:first-child { max-width: 54px; padding-left: 10px; }
        .wco-weekly-header ul li:nth-child(2), .wco-weekly-header ul li:nth-child(3), .wco-weekly-header ul li:nth-child(4), .wco-weekly-header ul li:nth-child(5) { max-width: 196px; }
        .wco-weekly-calculator .wco-weekly-col-2, .wco-weekly-calculator .wco-weekly-col-3, .wco-weekly-calculator .wco-weekly-col-4, .wco-weekly-calculator .wco-weekly-col-5 { max-width: 196px; padding: 6px 0; }
        .radio-lable { padding: 5px 4px; height: 40px; font-size: 18px !important; }
        .wco-weekly-col-6 { max-width: 80px; padding: 6px 0; }
        .wco-weekly-col-6 .total input[type="text"] { width: 76px !important; height: 41px; }
        .wco-weekly-total-title { max-width: 750px; }
        .wco-weekly-text { max-width: 200px; }
        .wco-weekly-footer-col-1, .wco-weekly-footer-col-2, .wco-weekly-footer-col-3 { max-width: 400px; }
        .wco-weekly-footer button.gray-btn, .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input { width: 175px; }
        .wco-weekly-col-2 input[type="tel"], .wco-weekly-col-3 input[type="tel"], .wco-weekly-col-4 input[type="tel"], .wco-weekly-col-5 input[type="tel"] { width: 42px; height: 41px; font-size: 18px !important; }
        .wco-weekly-email-section .email-box-field { max-width: 360px;}
        .wco-email-box-field.email-box-field { max-width: 100% !important;}
        .email-box-field input[type="email"] { max-width: 250px;} */
    }
    @media (max-width: 1366px) {
            .wco-weekly-col-2:after { content: "Lunch Break"; display: block; text-align: right; font-weight: 700; }
        .wco-container { max-width: 360px; padding: 0 5px; }
        .wco-weekly-header { display: none !important; }
        h3.wco-time-calculator-title { border-bottom: 4px solid #8aa92c; }
        .wco-weekly-lunch-col:first-child .wco-weekly-col-3, 
        .wco-weekly-lunch-col:first-child .wco-weekly-col-4, 
        .wco-weekly-lunch-col:first-child .wco-weekly-col-5, 
        .wco-weekly-lunch-col:first-child .wco-weekly-col-6 { padding-top: 6px !important; }
        .wco-mobile-in, .wco-mobile-out, .wco-mobile-total { display: inline-block; font-size: 18px; margin-right: 10px; padding-left: 10px;
        font-weight: 600; width: 65px; vertical-align: middle; text-align:left; }
        .wco-mobile-total { float: left; padding-top: 11px; }
        .wco-mobile-green-border { display: block; height: 4px; background-color: #8aa92c; margin: 8px 0 2px; }
        .wco-weekly-calculator .wco-weekly-col-2, .wco-weekly-calculator .wco-weekly-col-3, .wco-weekly-calculator .wco-weekly-col-4, .wco-weekly-calculator .wco-weekly-col-5, .wco-weekly-col-6 { max-width: 274px; text-align: left; }
        .wco-weekly-col-3, .wco-weekly-col-4, .wco-weekly-col-5, .wco-weekly-col-6 { margin-left: 60px; }
        /* .wco-weekly-col-6 .total input[type="text"] { width: 95px !important; font-weight: 700 !important; border: solid 2px #8AA92C !important; margin-left: 4px;font-size: 16px; } */
        .wco-weekly-col-6 .total input[type="text"], .wcoTotalLast-Desktop span.wcoTotalLine .gray_inputbox { width: 95px !important; font-weight: 700 !important; border: solid 2px #8AA92C !important; margin-left: 4px; font-size: 16px; height: 44px; border-radius: 5px; text-align: center; }
        /* .wco-weekly-col-6 .total input[type="text"].gray_inputbox1 { border: none !important; text-align: right; color: #a09f9f !important; font-size: 14px !important; font-weight: 400 !important; width: 45px !important;margin-left: 0 !important; } */
        .wco-weekly-col-6 .total input[type="text"].gray_inputbox1, .wcoTotalLast-Desktop .wcoDecimalLine .gray_inputbox { border: none !important; text-align: right; color: #a09f9f !important; font-size: 14px !important; font-weight: 400 !important; width: 45px !important; margin-left: 0 !important; height: 44px; }
        .wco-weekly-col-6 .total {text-align:left !important;}
        .total input[type="text"] {float:none !important;}
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-1, 
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-2, 
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-3, 
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-4, 
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-5, 
        .wco-weekly-lunch-col:nth-child(7) .wco-weekly-col-6 { padding-bottom: 6px !important; }
        .wco-weekly-text {max-width: 145px;}
        input[type="text"].yallow-input {height:30px; text-align:right; max-width:65px; padding:0;}
        .wco-weekly-total-title { max-width: 200px; font-weight: 400; padding-top:0; }
        .decimalInputBox {display:inline-block !important; max-width:67px; background:none; border:none; vertical-align:middle; text-align:left; border-right:solid 1px #fff; color:#fff; font-weight:700; font-size:16px; height:30px; padding-left: 10px; padding-top: 7px;}
        .wco-weekly-text input[type="text"].yallow-input { font-weight: 600 !important; }
        .wco-weekly-total { padding: 14px 5px 14px 5px;display: flex; align-items: center; justify-content: space-between; }
        .wco-weekly-footer-section { padding: 20px 12px; }
        .wco-weekly-footer button.gray-btn, .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input { max-width: 148px; font-size: 18px;}
        .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input { font-size: 18px; }
        .wco-weekly-footer button.brown-btn { max-width: 148px; font-size: 18px; }
        .wco-weekly-email-section .email-box-field { padding:10 0; }
        .wco-weekly-email-section .email-box-field label { max-width:100%; }
        .wco-email-box-field.email-box-field button { max-width: 115px; margin-right: 5px; font-size: 18px; padding: 10px; }
        .wco-weekly-total-title {font-size: 16px;}
        .wco-mobile-in, .wco-mobile-out, .wco-mobile-total {width:50px;}
        .decimalInputBox {display:block;}
        .topDecimalInput {display:inline-block; background:#fff; border-radius:6px; height:41px; font-size:14px; color:#999; width:95px; vertical-align: top; line-height:41px; text-align:center;}
        .wco-weekly-col-6 .total.wcoTotalLast-Mobile{display: block;}
        /* .wco-weekly-col-6 .wcoTotalLast-Desktop{display: none;} */
        .wco-weekly-calculator .wco-weekly-text .hr-text-pl {display: none; }
        .wco-weekly-calculator .wco-weekly-text .listfield.enter.gray_inputbox { height: initial; font-size: 14px !important; font-weight: bold !important; max-width: 50px; }
        .wco-weekly-footer button.gray-btn, .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input, .wco-weekly-footer button.brown-btn { width: 140px; max-width: 130px; font-size: 16px; }
        .wco-weekly-calculator .wco-weekly-col-1 { max-width: 55px; }
        .wco-summary-mobile-table table tr td .summary-number-title:last-child { font-weight: 700 !important;float: right; }
        .DecimalinputboxDec input#total { font-size: 14px !important;text-align: right;max-width: 45px; }
        .radio-lable { height: 42px; width: 45px; line-height: 42px !important;text-align: center; font-size: 16px !important;border: 2px solid #d2d2d2;} 
        .radio-lable-active { border: 2px solid #a09f9f; }
        .wco-weekly-col-2 input[type="tel"], .wco-weekly-col-3 input[type="tel"], .wco-weekly-col-4 input[type="tel"], .wco-weekly-col-5 input[type="tel"] { height: 42px; width: 45px; border: 2px solid #d2d2d2;}
        .wco-weekly-col-6 span.hours-txt { color: #a09f9f !important; font-size: 14px !important; font-weight: 400 !important; text-align: left; display: inline-block; vertical-align: middle;text-align: center; }
        .wco-weekly-lunch-col .wco-weekly-col-1{padding-top: 25px !important; padding-bottom: 0 !important;}
        .wco-weekly-lunch-col:first-child .wco-weekly-col-1  { padding-top: 40px !important; padding-bottom: 0 !important; }
        .wco-weekly-calculator .wco-weekly-text span.TotalTimeinputbox .listfield.enter.gray_inputbox { max-width: 65px; padding-right: 0 !important; padding-left: 10px !important; border-left: 1px solid #fff !important; border-right: none !important; }s
        .wco-weekly-text.wco-weekly-text-mobile { display: flex; align-items: center; justify-content: flex-end; }
        .wco-weekly-text span.TotalTimeinputbox { order: 2; } 
        .wco-weekly-text span.DecimalinputboxDec { order: 1; }
    }
    @media (max-width: 1366px) {
            .wco-weekly-col-2:after { content: "Lunch Break"; display: block; text-align: right; font-weight: 700; }
      .press-tab-title { display: none !important; }
      .wco-weekly-col-2 input[type="tel"], .wco-weekly-col-3 input[type="tel"], .wco-weekly-col-4 input[type="tel"], .wco-weekly-col-5 input[type="tel"] { font-size: 16px !important; }
       /*Weekly Summary*/
         .wco-summary-mobile-table, .wco-summary-mobile { display:block !important; }
         input#total { font-size: 18px !important; }
         .wco-summary-mobile-title {font-size: 16px;}
         .wco-summary-mobile-table table .top-medium-gray {font-size: 16px; display:none;}
         .wco-summary-mobile-table table tr th {padding: 10px 8px;}
         .summary-am-title {font-size: 13px;}
         .DecimalinputboxDec input#total { font-size: 14px !important;}
         .wco-weekly-text.wco-weekly-text-mobile { display: flex; align-items: center; justify-content: flex-end; }
         .wco-weekly-text span.TotalTimeinputbox input {text-align: right !important;}
         .wco-weekly-calculator .wco-weekly-text span.TotalTimeinputbox .listfield.enter.gray_inputbox {font-size: 18px !important;}
         /*End Weekly Summary*/
    }
    @media (max-width: 740px) {
            .wco-weekly-col-2:after { content: ""; }
            .wco-weekly-col-3:after { content: "Lunch Break"; display: block; text-align: center; font-weight: 700; }
    }
    @media (max-width: 480px) {
    .wco-weekly-footer button.gray-btn, .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input, .wco-weekly-footer button.brown-btn { width: 140px;max-width: 130px; font-size: 16px; }
    }
    @media (max-width: 380px) {
        .wco-weekly-total-title {max-width: 180px;}
        .wco-weekly-text {max-width: 140px;}
    }
    @media (max-width: 359px) {
        .decimalInputBox {max-width: 55px;}
        .wco-weekly-text input[type="text"].yallow-input {max-width: 45px !important;}
        .wco-weekly-text {max-width: 125px;}
        .wco-weekly-calculator .wco-weekly-col-1, .wco-weekly-header ul li:first-child { max-width: 42px; padding-left: 0; }
        .wco-weekly-calculator .wco-weekly-col-2, .wco-weekly-calculator .wco-weekly-col-3, .wco-weekly-calculator .wco-weekly-col-4, .wco-weekly-calculator .wco-weekly-col-5, .wco-weekly-col-6 {max-width: 248px; }
        .topDecimalInput {width:90px;}
        .wco-weekly-col-6 .total input[type="text"] {width:90px !important;}
        .wco-mobile-in, .wco-mobile-out, .wco-mobile-total { width: 42px; padding-left:5px;}
        .wco-weekly-col-3, .wco-weekly-col-4, .wco-weekly-col-5, .wco-weekly-col-6 { margin-left: 45px;}
        .wco-weekly-footer button.gray-btn, .wco-weekly-footer input[type="tel"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="text"].yellow_inputbox.wight-input, .wco-weekly-footer input[type="tel"].wight-input, .wco-weekly-footer input[type="text"].yallow-input { max-width: 123px; font-size: 14px; }
        .wco-weekly-footer button.brown-btn { max-width: 123px; font-size: 14px; }
        .summary-number-title { font-size: 11px !important; }
         .total-sum  { font-size: 13px !important; }
         .sum-total  { font-size: 16px !important; }
    }
    @media (max-width: 340px) {
        .wco-weekly-total-title {max-width: 167px;}
        .wco-weekly-col-2 input[type="tel"], .wco-weekly-col-3 input[type="tel"], .wco-weekly-col-4 input[type="tel"], .wco-weekly-col-5 input[type="tel"] { height: 40px; width: 40px; }
        .radio-lable { height: 40px; width: 40px; line-height: 40px !important; }
    }
    .hide { display: none; }
</style>
<div class="custom_calculator_wrapper">
    <h2 class="custom_calculator_heading">Time Clock Hours, Lunch Break and Pay Calculator</h2>
    <div class="custom_calculator_body">
        <section class="card-calculator">
              <div class="wco-weekly-header">
                <ul>
                  <li></li>
                  <li><span class="lightGrayBg">In</span></li>
                  <li><span>Out</span></li>
                  <li><span class="lightGrayBg">In</span></li>
                  <li><span>Out</span></li>
                  <li><span class="lightGrayBg">Total</span></li>
                </ul>
              </div>
              <div class="wco-weekly-calculator">
                <div class="wco-weekly-lunch lineTarget">
                  
                <div class="wco-weekly-lunch-col inputLine orange-bg1">
                    <div class="wco-weekly-col-1"><span class="numbar">Mon</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[0]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[0]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[0]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[0]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[0]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[0]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[0]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[0]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                      <!-- <div class="total wcoTotalLast-Mobile">
                        <span class="wco-mobile-total">Total</span>
                        <input type="text" name="totaldaytime[]" class="wight-input wi-40 listfield inputbox gray_inputbox" value="00:00" readonly />
                        <input type="text" name="totaldaytime1[]" class="gray_inputbox1 wight-input wi-40 listfield inputbox" value="0.00" readonly />
                        <span class="hours-txt">hours</span> 
                        <span class="topDecimalInput">0.00 hours</span>
                      </div> -->
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine">
                    <div class="wco-weekly-col-1"><span class="numbar">Tue</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[1]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[1]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[1]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[1]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[1]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[1]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[1]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[1]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine orange-bg1">
                    <div class="wco-weekly-col-1"><span class="numbar">Wed</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[2]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[2]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[2]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[2]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[2]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[2]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[2]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[2]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                      <!-- <div class="total wcoTotalLast-Mobile">
                        <span class="wco-mobile-total">Total</span>
                        <input type="text" name="totaldaytime[]" class="wight-input wi-40 listfield inputbox gray_inputbox" value="00:00" readonly />
                        <input type="text" name="totaldaytime1[]" class="gray_inputbox1 wight-input wi-40 listfield inputbox" value="0.00" readonly />
                        <span class="hours-txt">hours</span> 
                        <span class="topDecimalInput">0.00 hours</span>
                      </div> -->
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine">
                    <div class="wco-weekly-col-1"><span class="numbar">Thu</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[3]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[3]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[3]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[3]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[3]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[3]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[3]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[3]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>

                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine orange-bg1">
                    <div class="wco-weekly-col-1"><span class="numbar">Fri</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[4]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[4]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[4]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[4]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[4]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[4]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[4]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[4]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                      <!-- <div class="total wcoTotalLast-Mobile">
                        <span class="wco-mobile-total">Total</span>
                        <input type="text" name="totaldaytime[]" class="wight-input wi-40 listfield inputbox gray_inputbox" value="00:00" readonly />
                        <input type="text" name="totaldaytime1[]" class="gray_inputbox1 wight-input wi-40 listfield inputbox" value="0.00" readonly />
                        <span class="hours-txt">hours</span> 
                        <span class="topDecimalInput">0.00 hours</span>
                      </div> -->
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine">
                    <div class="wco-weekly-col-1"><span class="numbar">Sat</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[5]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[5]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[5]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[5]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[5]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[5]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[5]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[5]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div><div class="wco-weekly-lunch-col inputLine orange-bg1">
                    <div class="wco-weekly-col-1"><span class="numbar">Sun</span></div>
                    <div class="wco-weekly-col-2">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable radio-lable-active radio-lable-am"><input type="radio" class="inputradio" value="AM" checked="" name="intime[6]"> AM </label>
                      <label class="radio-lable"><input type="radio" class="inputradio" value="PM" name="intime[6]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-3">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhour[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outmin[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtime[6]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtime[6]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-4">
                      <span class="wco-mobile-in">In</span>
                      <input type="tel" name="inhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="inminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="intimelb[6]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="intimelb[6]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-5">
                      <span class="wco-mobile-out">Out</span>
                      <input type="tel" name="outhourlb[]" class="listfield inputbox yellow_inputbox hour" value="00" maxlength="2">
                      <span class="wco-dot">:</span>
                      <input type="tel" name="outminlb[]" class="listfield inputbox yellow_inputbox minute" value="00" maxlength="2">
                      <label class="radio-lable"><input type="radio" class="inputradio" value="AM" name="outtimelb[6]"> AM </label>
                      <label class="radio-lable radio-lable-active radio-lable-pm"><input type="radio" class="inputradio" value="PM" checked="" name="outtimelb[6]"> PM </label>
                    </div>
                    <div class="wco-weekly-col-6 wco_grayColor wcoTotalLast">
                      <div class="wcoTotalLast-Desktop">
                        <span class="wco-mobile-total">Total</span>
                        <span class="wcoTotalLine">
                          <input type="text" name="totaldaytime[]" class="listfield inputbox gray_inputbox" value="00:00" readonly="">
                        </span>
                        <span class="wcoDecimalLine">
                          <input type="text" name="totaldaytime1[]" class="listfield inputbox gray_inputbox decimaltotalhours" value="0.00" readonly="">
                          hours</span>
                      </div>
                    </div>
                    <span class="wco-mobile-green-border"></span>
                    <div class="rows hide" align="right"><span rel="7">7 rows</span>&nbsp;&nbsp;</div>
                    <div class="clear"></div>
                  </div>
              </div>
                <div class="clear"></div>

                <div class="clear"></div>
                <div class="wco-weekly-total">
                  <div class="wco-weekly-total-title">Grand Total</div>
                  <div class="wco-weekly-text wco-weekly-text-mobile">
                    <span class="TotalTimeinputbox">
                      <input type="text" class="listfield enter gray_inputbox" value="00:00" id="total" name="total" val="0" readonly="">
                    </span>
                    <span class="DecimalinputboxDec">
                      <input type="text" class="yallow-input listfield enter gray_inputbox" value="0.00" id="decimal" name="decimal" val="0" readonly="">
                      <span class="hr-text-pl">hours</span>
                    </span>
                  </div>
                </div>
                <div class="clear"></div>

                <div class="wco-weekly-footer-section">
                  <div class="wco-weekly-footer">
                    <div class="wco-weekly-footer-col-12">
                      <button type="button" class="gray-btn">Hourly Rate</button>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                      <input type="tel" class="wight-input listfield enter yellow_inputbox lightGryaBg" id="rate" name="rate" placeholder="Enter">
                      <button type="button" class="gray-btn">Total Pay</button>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                      <input type="text" class="yallow-input listfield enter gray_inputbox lightGryaBg" value="0.00" id="totalPay" name="totalPay" val="0" readonly="">
                      <button type="button" class="gray-btn">Regular Hours</button>
                      <i class="fa fa-clock" aria-hidden="true"></i>
                      <input type="text" class="wight-input listfield enter yellow_inputbox lightGryaBg" id="regularHours" name="regularHours" placeholder="Daily hours">

                      <button type="button" class="gray-btn">Overtime Pay</button>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                      <input type="text" class="wight-input listfield enter yellow_inputbox lightGryaBg" id="overtimePay" name="overtimePay" placeholder="0.00">
                    </div>
                  </div>
                </div>

                <div class="wco-weekly-footer-col-12 custom_wrap_btns">
                  <button type="button" class="custom-brown-btn" id="calculate">Calculate</button>
                  <button type="button" class="custom-brown-btn" id="overtimePayBtn">Overtime Pay Calculate</button>
                  <button class="btn brown-btn custom-brown-btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Instructions</button>
                    <!-- <button id="overtime_hours" class="btn btn-primary" type="button">Overtime Hours</button> -->
                </div>

                <div class="clear"></div>
                <div class="wco-weekly-total">
                    <div id="total_regular_hours"></div>
                    <div id="total_regular_pay"></div>

                    <div id="total_overtime"></div>
                    <div id="total_overtime_pay"></div>
                    
                    <div id="total_regular_and_overtime_pay"></div>
                </div>
                <div class="clear"></div>

                <div class="custom_content_instructions">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">

                            <h5>Instructions for Using the Free Time Clock Hours, Lunch Break & Pay Calculator</h5>
                            <p>Welcome to our Free Time Clock Calculator! This tool is a convenient solution for various users, including business owners, HR professionals, managers and supervisors in different industries such as manufacturing, retail, healthcare, hospitality, construction, call centers and education, as well as individuals who are responsible for payroll processing for large labor pools of blue collar workers on hourly rates. Whether you want to estimate paycheck or track work hours or lunch breaks, this online calculator can assist you.</p>

                            <h5>How to Use the Time Clock Hours Calculator:</h5>
                            <ul>
                                <li>Navigate Easily: To move between the input fields, simply press the TAB key on your keyboard.</li>
                                <li>Select AM or PM: Use the arrow up/down buttons or the letters 'A' and 'P' to choose between AM and PM.</li>
                                <li>Optional Data: If desired, you can enter additional information such as the date and your name. This can be helpful for record-keeping purposes.</li>
                                <!-- <li>Printing: If you wish to print your calculated time data, please allow pop-ups before you start entering your information. Note that refreshing the page will erase your data.</li> -->
                            </ul>

                            <h5>Benefits of an Hourly Wage:</h5>

                            <ul>
                                <li>Income Guarantee: With an hourly wage, you receive a specific amount of income for each hour worked.</li>
                                <li>Overtime Pay: If you work more than required work hours a week, you're entitled to overtime pay.</li>
                                <li>Predictable Schedule: Hourly jobs, like the traditional 9-to-5 positions, often offer a fixed schedule, providing predictability in your working hours.</li>
                            </ul>

                            <h5>Disclaimer - Time Clock Hours, Lunch Break & Pay Calculator:</h5>

                            <p>Please be aware that our Free Online Time Clock Calculator provides general estimates and should not be solely relied upon for financial calculations. CloudApper does not offer any warranty or assurance regarding the quality or accuracy of our Free Time Clock Hours, Lunch Break & Pay Calculator.</p>

                            <h5>Calculate Overtime Hours:</h5>
                            <p>Default regular daily work hours count as 8 hours. If any changes, then add the daily work hours value in <u>Regular Hours</u> field.</p>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</div>
<script type="text/javascript">
    // $(document).ready(function() {
    jQuery(document).ready(function($){

        $('#msgs').html('Press TAB to move to the next field').show();

        $("input.inputbox", $('.gray_inputbox:first')).val("0.00");
        
        $("input:last", $('.gray_inputbox1:first')).val("00:00");

        var firstLine = $('.inputLine:first');

        $("#rate").focus(function() {

            if ($(this).val() == "enter here") {

                $(this).val("")

            }

        }).blur(function() {

            if ($(this).val() == "") {

                $(this).val("enter here")

            } else {

                $(this).val(parseFloat($(this).val()).toFixed(2))

            }

            $("#calculate").click()

        });

        $("#name").focus(function() {

            if ($(this).val() == "enter here") {

                $(this).val("")

            }

        }).blur(function() {

            if ($(this).val() == "") {

                $(this).val("enter here")

            }

        });

        $('.rows span').click(function() {

            var currentLines = $(".inputLine").length;

            var toLines = $(this).attr('rel');

            $(".inputLine ").each(function() {

                $(this).find('select:gt(0)').val(1)

            });

            $(".inputLine input.yellow_inputbox").click(function() {

              if (parseInt($(this).val(), 10) == 0) {

                $(this).val("")

              }

            }).focus(function(){
                if (parseInt($(this).val(), 10) == 0) {

              $(this).val("")

            }
                }).blur(function() {

             if (parseInt($(this).val(), 10) > 0) {

                    if ($(this).attr("class").indexOf("hour") != -1 && parseInt($(this).val(), 10) > 12) {

                        $(this).val(12)

                    } else if ($(this).attr("class").indexOf("minute") != -1 && parseInt($(this).val(), 10) > 60) {

                        $(this).val(60)

                    } else {

                        if ($(this).val() == 0) {

                            $(this).val("00")

                        } else if (parseInt($(this).val(), 10) < 10) {

                            $(this).val("0" + parseInt($(this).val(), 10))
                            // $(this).val(parseInt($(this).val(), 10))

                        }

                    }

                } else {

                    $(this).val("00")

                }

                $("#calculate").click()

            });

            $("select").blur(function() {

                $("#calculate").click()

            });

            $(".inputradio").change(function () {

                $("#calculate").click()

            });

            $(".listfield").keydown(function(e) {

                if (e.keyCode == 9) {

                    var inputs = $(".listfield");

                    var idx = inputs.index(this);

                    if (idx == inputs.length - 1) {} else {

                        var thisElement = inputs[idx + 1];

                        if ($(thisElement).attr("class").indexOf("gray_input") != -1) {

                            thisElement = inputs[idx + 2];

                            if ($(thisElement).attr("class").indexOf("gray_input") != -1) {

                                thisElement = inputs[idx + 3]

                            }

                        }

                        $(thisElement).focus();

                        $(thisElement).select()

                    }

                    return false

                }

            })

        });

        $(".rows span:first").click();

        $('p.weekof input').change(function() {

            $(this).val(function(i, v) {

                v = parseInt(v);

                if (isNaN(v)) v = '00';

                else if (v < 10) v = '0' + v;
                // else if (v < 10) v = v;

                return v

            })

        });

        $(".wco-weekly-col-2").each(function (i) {
             //i=i+1;
            var nmIn="intime["+i+"]";
            $('.inputradio',this).attr('name',nmIn);
        });

        $(".wco-weekly-col-3").each(function (i) {
            //i=i+9
            var nmOut="outtime["+i+"]";
           $('.inputradio',this).attr('name',nmOut);
        });

        $(".wco-weekly-col-4").each(function (i) {
             //i=i+1;
            var nmInlb="intimelb["+i+"]";
            $('.inputradio',this).attr('name',nmInlb);
        });

        $(".wco-weekly-col-5").each(function (i) {
            //i=i+9
            var nmOutlb="outtimelb["+i+"]";
           $('.inputradio',this).attr('name',nmOutlb);
        });

        var totalWeek1 = 0;

        var totalWeek2 = 0;

        $("#calculate").click(function() {
            var sh = 0;

            var sm = 0;

            var sa = 0;

            var eh = 0;

            var em = 0;

            var ea = 0;

            var totalDiff = 0;

            totalWeek1 = 0;

            totalWeek2 = 0;

            $(".inputLine").each(function(i) {

                var rad1 = $('.wco-weekly-col-2 input[type="radio"]:checked', this).val();
                if(rad1=="PM") {sa=1;} else{sa=0;}
                var rad2 = $('.wco-weekly-col-3 input[type="radio"]:checked', this).val();
                if(rad2=="PM") {ea=1;} else{ea=0;}
                
                var rad3 = $('.wco-weekly-col-4 input[type="radio"]:checked', this).val();
                if(rad3=="PM") {ssa=1;} else{ssa=0;}
                var rad4 = $('.wco-weekly-col-5 input[type="radio"]:checked', this).val();
                if(rad4=="PM") {eea=1;} else{eea=0;}

                var thisLine = $(this);

                var diffMin = 0;

                var sh = parseInt($(".yellow_inputbox:eq(0)", this).val(), 10);

                var sm = parseInt($(".yellow_inputbox:eq(1)", this).val(), 10);

                //var sa = parseInt($(".yellow_inputbox:eq(2)", this).val(), 10);

                var eh = parseInt($(".yellow_inputbox:eq(2)", this).val(), 10);

                var em = parseInt($(".yellow_inputbox:eq(3)", this).val(), 10);

                //var ea = parseInt($(".yellow_inputbox:eq(5)", this).val(), 10);

                var ssh = parseInt($(".yellow_inputbox:eq(4)", this).val(), 10);

                var ssm = parseInt($(".yellow_inputbox:eq(5)", this).val(), 10);

                //var ssa = parseInt($(".yellow_inputbox:eq(8)", this).val(), 10);

                var eeh = parseInt($(".yellow_inputbox:eq(6)", this).val(), 10);

                var eem = parseInt($(".yellow_inputbox:eq(7)", this).val(), 10);

                //var eea = parseInt($(".yellow_inputbox:eq(11)", this).val(), 10);

                if ((sh > 0 && eh > 0)) {

                    if (sa == 0) {

                        if (sh == 12) {
                            sh = 0
                        }

                    } else {

                        if (sh != 12) {
                            sh = parseInt(sh + 12, 10)
                        }

                    }

                    if (ea == 0) {

                        if (eh == 12) {
                            eh = 0
                        }

                    } else {

                        if (eh != 12) {
                            eh = parseInt(eh + 12, 10)
                        }

                    }

                    var time1 = parseInt(sh * 60 + sm, 10);

                    var time2 = parseInt(eh * 60 + em, 10);

                    if (time1 < time2) {

                        diffMin += parseInt(time2 - time1, 10)

                    } else {

                        diffMin += parseInt(24 * 60 - parseInt(time1 - time2, 10), 10)

                    }
                    //alert("sa="+sa+" ea="+ea+" sh="+sh+" eh="+eh+" T1="+time1+" T2="+time2+" TD="+diffMin);
                }

                if (ssh > 0 && eeh > 0) {

                    if (ssa == 0) {

                        if (ssh == 12) {

                            ssh = 0

                        }

                    } else {

                        if (ssh != 12) {

                            ssh = parseInt(ssh + 12, 10)

                        }

                    }

                    if (eea == 0) {

                        if (eeh == 12) {

                            eeh = 0

                        }

                    } else {

                        if (eeh != 12) {

                            eeh = parseInt(eeh + 12, 10)

                        }

                    }

                    var time1 = parseInt(ssh * 60 + ssm, 10);

                    var time2 = parseInt(eeh * 60 + eem, 10);

                    if (time1 < time2) {

                        diffMin += parseInt(time2 - time1, 10)

                    } else {

                        diffMin += parseInt(24 * 60 - parseInt(time1 - time2, 10), 10)

                    }

                }

                if (diffMin > 0) {

                    totalDiff = parseInt(totalDiff + diffMin, 10);

                    var newHour = parseInt(diffMin / 60, 10);

                    var newMin = parseInt(diffMin % 60, 10);

                    if (i < 7) totalWeek1 += diffMin;

                    else totalWeek2 += diffMin;

                    if (newHour < 10) {

                        newHour = "0" + newHour

                    }

                    if (newMin < 10) {

                        newMin = "0" + newMin

                    }

                    var decHour = 0 ;

                    var decMin = 0 ;
                    
                    var numb = 0 ;

                    if (!isNaN(newHour)) 
                    {
                        if (!isNaN(newMin)) {

                            decMin = newMin/60;
                        }
                    
                        // console.log( parseFloat(newHour) +  parseFloat(decMin));
                    
                        decHour = parseFloat(newHour) + parseFloat(decMin) ;
                        // console.log("decHour",decHour);

                        // numb = decHour.toFixed(2)

                        if(decHour <  10){
                            // numb = "0" + decHour.toFixed(2)    
                            numb = decHour.toFixed(2)    
                            // console.log("less dec",numb);
                        }
                        else{
                            numb = decHour.toFixed(2)
                            // console.log("In numb",numb);   
                        }
                        //  Math.round(decHour * 100) / 100;
                        
                         // $(".gray_inputbox", this).val(newHour + ":" + newMin);
                          // $("listfiled .gray_inputbox", this).val(newHour + "." + newMin);
                        //   console.log(newHour + ":" + newMin);
                          $(".gray_inputbox", this).val(newHour + ":" + newMin);
                          // $(".gray_inputbox", this).val(parseFloat(numb).toFixed(2));
                          $(".decimaltotalhours", this).val(numb);

                    }

                    else{
                            console.log("fail");
                            var numb= 0.00;
                            // numb = parseFloat(numb).toFixed(2);
                            $(".decimaltotalhours", this).val(parseFloat(numb).toFixed(2));
                            
                    }

                   
                    

                }

            });

            var totalHour = parseInt(totalDiff / 60, 10);

            var totalMin = parseInt(totalDiff % 60, 10);

            if (totalHour < 10) {

                // totalHour = "0" + totalHour
                totalHour = "0" + totalHour

            }

            if (totalMin < 10) {

                totalMin = "0" + totalMin

            }

            $("#total").val(totalHour + ":" + totalMin);

            totalHour = parseInt(totalWeek1 / 60, 10);

            totalMin = parseInt(totalWeek1 % 60, 10);

            if (totalHour < 10) {

                totalHour = "0" + totalHour

            }

            if (totalMin < 10) {

                totalMin = "0" + totalMin

            }

            $("#week1").val(totalHour + ":" + totalMin);

            totalHour = parseInt(totalWeek2 / 60, 10);

            totalMin = parseInt(totalWeek2 % 60, 10);

            if (totalHour < 10) {

                totalHour = "0" + totalHour

            }

            if (totalMin < 10) {

                totalMin = "0" + totalMin

            }

            $("#week2").val(totalHour + ":" + totalMin);

            if (parseFloat($("#rate").val()) > 0) {

                $("#totalPay").val((totalDiff / 60 * parseFloat($("#rate").val())).toFixed(2))

            } else {

                $("#totalPay").val("0")

            }


            var t = parseInt(totalDiff / 60, 10);
            console.log('t '+t);

            var u = parseInt(totalDiff % 60, 10);
            console.log("u",u);

            if (t < 10) {

                // t = "0" + t
                t =  t
                if(t == 0)
                {
                    t = 0;
                }

            }

            if (u < 10) {

                u = "0" + u
            }        

            if($('#decimal')) {
                // console.log(t + " h" + " " + u + " m");
                var totalDecMin1 = (u/60).toFixed(2) ;
                // console.log(totalDecMin1);
                // console.log('decimal total ====' + totalDecMin1);
                var no = totalDecMin1.toString(); 

                // console.log("deciml no",no);
                n2 = (no + "").split(".");
                // console.log(n2[1]);
                var totalDecHour1 =  t + '.' + n2[1] ;
                // console.log(totalDecHour1);
                $('#decimal').val(totalDecHour1);
            }

            // testFun();

        });

        /*$("#sendEmail").click(function() {
            $("#calculate").click();
            $("#emailBox").show(500)
        });
        $(".cancelSend").click(function() {
            $("#emailBox").hide(500)
        });
        function testFun() {
            var pass_data = $('#calc').serialize();
            // console.log(pass_data);
            $.ajax({
                type: "POST",
                url: "./time_clock_calculator/summery-R-2022.php",
                data: pass_data,
                dataType: "json",
                success: function(result) {

                    // console.log(result.week1);
                    // console.log('result.week1');
                    $('.wco-summary-mobile-table-week1').html('');
                    $('.wco-summary-mobile-table-week2').html('');
                    
                    $('.wco-summary-mobile-table-week1').html(result.week1);
                    $('.wco-summary-mobile-table-week2').html(result.week2);
                },
                error:function (error) {
                   
                }
            });
        }*/
    });    
</script>
<script type="text/javascript">
    // $(document).ready(function() {
    jQuery(document).ready(function($){        
        // Define a function to calculate and display the total
        function calculateTotal() {
            var daily_hours = parseFloat($('#regularHours').val()); // Get the value of regular hours
             if ( isNaN(daily_hours) || daily_hours === 0 ) {
                var daily_hours = 8;
            }
            var total = 0;
            $('.decimaltotalhours').each(function() {
                var per_day = parseFloat($(this).val()); // Get the value of each element and convert it to a floating-point number
                // if (!isNaN(per_day)) { // Check if per_day is a valid number
                if (per_day != 0) {
                    var updatedValue = per_day - daily_hours; // Subtract 8 from the value
                    total += updatedValue; // Add the updated value to the total
                }
            });
            console.log('Total:', total);

            // Display the total overtime hours in the span
            $('#total_overtime').text('Total Overtime Hours: ' + total.toFixed(2));
        }
        // Add a click event handler to the button
        // $('#overtime_hours').click(function() {
        $('#calculate').click(function() {
            calculateTotal(); // Call the calculateTotal function when the button is clicked
        });

        function overtimeTotalPay() {
            var daily_hours = parseFloat($('#regularHours').val()); // Get the value of regular hours
            var overtime_pay_per_hour = parseFloat($('#overtimePay').val()); // Get the value of overtimePay per hours
            var grand_total_hours = parseFloat($('#decimal').val()); // Get the value of grand total hours
            var regular_hour_rate = parseFloat($('#rate').val()); // Get the value of grand total hours

            if ( isNaN(daily_hours) || daily_hours === 0 ) {
                var daily_hours = 8;
            }
            var total = 0;
            $('.decimaltotalhours').each(function() {
                var per_day = parseFloat($(this).val()); // Get the value of each element and convert it to a floating-point number
                // if (!isNaN(per_day)) { // Check if per_day is a valid number
                if (per_day != 0) {
                    var updatedValue = per_day - daily_hours; // Subtract 8 from the value
                    total += updatedValue; // Add the updated value to the total
                }
            });

            var overtimeTotalHours = total.toFixed(2);
            var totalOvertimePay = overtimeTotalHours * overtime_pay_per_hour;
            console.log(totalOvertimePay);

            var cal_grand_total_hours = grand_total_hours - overtimeTotalHours;
            var grand_total_pay = cal_grand_total_hours * regular_hour_rate;

            var total_regular_overtime_pay = grand_total_pay + totalOvertimePay;

            // Display the total overtime hours in the span
            $('#total_overtime_pay').text('Total Overtime Pay: $' + totalOvertimePay.toFixed(2));
            $('#total_regular_hours').text('Total Regular Hours: ' + cal_grand_total_hours.toFixed(2));
            $('#total_regular_pay').text('Total Regular Pay: $' + grand_total_pay.toFixed(2));
            $('#total_regular_and_overtime_pay').text('Total Pay: $' + total_regular_overtime_pay.toFixed(2));
        }
        $('#overtimePayBtn').click(function() {
            overtimeTotalPay();
        });
    });
</script>