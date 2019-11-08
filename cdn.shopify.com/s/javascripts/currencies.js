  var Currency = {
    rates: {"USD":1.0,"EUR":1.13928,"GBP":1.32579,"CAD":0.759653,"ARS":0.0257241,"AUD":0.719302,"BRL":0.266726,"CLP":0.00154284,"CNY":0.149309,"CYP":0.397899,"CZK":0.0444505,"DKK":0.152682,"EEK":0.0706676,"HKD":0.127402,"HUF":0.00359852,"ISK":0.00836958,"INR":0.0140899,"JMD":0.00767303,"JPY":0.009045,"LVL":1.57329,"LTL":0.320236,"MTL":0.293496,"MXN":0.0521143,"NZD":0.68952,"NOK":0.11684,"PLN":0.263494,"SGD":0.742101,"SKK":21.5517,"SIT":175.439,"ZAR":0.0722685,"KRW":0.000896863,"SEK":0.107779,"CHF":1.00013,"TWD":0.0324911,"UYU":0.0305997,"MYR":0.245795,"BSD":1.0,"CRC":0.00164384,"RON":0.239145,"PHP":0.0192356,"AED":0.272294,"VEB":0.000100125,"IDR":7.15898e-05,"TRY":0.188482,"THB":0.0319462,"TTD":0.147465,"ILS":0.276361,"SYP":0.00194172,"XCD":0.370032,"COP":0.000324371,"RUB":0.0152235,"HRK":0.153376,"KZT":0.00264687,"TZS":0.000426411,"XPT":859.79,"SAR":0.266667,"NIO":0.0305944,"LAK":0.000116526,"OMR":2.60078,"AMD":0.0020452,"CDF":0.000613638,"KPW":0.00111106,"SPL":6.0,"KES":0.00998542,"ZWD":0.00276319,"KHR":0.000250416,"MVR":0.064707,"GTQ":0.129654,"BZD":0.4964,"BYR":4.6795e-05,"LYD":0.724188,"DZD":0.0084143,"BIF":0.000547183,"GIP":1.32579,"BOB":0.144796,"XOF":0.00173682,"STD":4.63992e-05,"NGN":0.00276819,"PGK":0.297015,"ERN":0.0666667,"MWK":0.00137312,"CUP":0.0377358,"GMD":0.0201803,"CVE":0.0103317,"BTN":0.0140899,"XAF":0.00173682,"UGX":0.000272087,"MAD":0.104911,"MNT":0.000379813,"LSL":0.0722685,"XAG":15.931,"TOP":0.44513,"SHP":1.32579,"RSD":0.00963851,"HTG":0.0122063,"MGA":0.000285828,"MZN":0.0160263,"FKP":1.32579,"BWP":0.0951102,"HNL":0.0409584,"PYG":0.000164307,"JEP":1.32579,"EGP":0.0571075,"LBP":0.00066335,"ANG":0.558695,"WST":0.384408,"TVD":0.719302,"GYD":0.00478083,"GGP":1.32579,"NPR":0.00876511,"KMF":0.00231576,"IRR":2.37738e-05,"XPD":1560.84,"SRD":0.134102,"TMM":5.71301e-05,"SZL":0.0722685,"MOP":0.123691,"BMD":1.0,"XPF":0.00954717,"ETB":0.034969,"JOD":1.41044,"MDL":0.0585182,"MRO":0.00278937,"YER":0.00399528,"BAM":0.582505,"AWG":0.558659,"PEN":0.302398,"VEF":0.100125,"SLL":0.000116377,"KYD":1.21951,"AOA":0.00318303,"TND":0.328691,"TJS":0.10595,"SCR":0.0718601,"LKR":0.00555991,"DJF":0.00562501,"GNF":0.000108399,"VUV":0.00881128,"SDG":0.0209969,"IMP":1.32579,"GEL":0.371951,"FJD":0.47314,"DOP":0.0197505,"XDR":1.39669,"MUR":0.0294003,"MMK":0.000658313,"LRD":0.00620527,"BBD":0.5,"ZMK":8.34837e-05,"XAU":1329.16,"VND":4.30815e-05,"UAH":0.0370271,"TMT":0.28565,"IQD":0.000838025,"BGN":0.582505,"KGS":0.0143574,"RWF":0.00112976,"BHD":2.65957,"UZS":0.00011893,"PKR":0.00720959,"MKD":0.018464,"AFN":0.0134311,"NAD":0.0722685,"BDT":0.0118905,"AZN":0.589412,"SOS":0.00172397,"QAR":0.274725,"PAB":1.0,"CUC":1.0,"SVC":0.114286,"SBD":0.124715,"ALL":0.00909571,"BND":0.742101,"KWD":3.29413,"GHS":0.182462,"ZMW":0.0834837,"XBT":3811.47,"NTD":0.0337206,"BYN":0.46795,"CNH":0.149609,"MRU":0.0278937,"STN":0.0463992,"VES":0.00030359},
    convert: function(amount, from, to) {
      return (amount * this.rates[from]) / this.rates[to];
    }
  };
