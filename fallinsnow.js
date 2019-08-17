//<![CDATA[
var ns4b = (document.layers) ? 1 : 0;   // Netscape4.x
var b4up = (document.all) ? 1 : 0;      // MSIE4, Opera5, Netccape5
var dx, xp, yp;                // coordinate and position variables
var am, stx, sty;              // amplitude and step variables
var snowobj;
var i, doc_width = 900, doc_height = 850;
if (!b4up) {
if (ns4b) {
   doc_width  = self.innerWidth;
   doc_height = self.innerHeight;
} else if (b4up) {
   doc_width  = document.body.clientWidth;
   doc_height = document.body.clientHeight;
} else {
   b4up = 1;                   // 800x600 screen-default
}// if

dx = new Array();
xp = new Array();
yp = new Array();
am = new Array();
stx = new Array();
sty = new Array();
snowobj = new Array();

for (i=0; i<no; ++i) {         // iterate for every snowflake
   dx[i] = 0;                  // set coordinate variables
   xp[i] = Math.random()*(doc_width-50); // set position variables
   yp[i] = Math.random()*doc_height;
   am[i] = Math.random()*20;             // set amplitude variables
   stx[i] = 0.02 + Math.random()/10;     // set step variables
   sty[i] = 0.7 + Math.random();         // set step variables
   if (ns4b) {                           // set layers
      document.write("<LAYER NAME=\"flake"+ i +"\" LEFT=\"15\" "
      + "TOP=\"15\" VISIBILITY=\"show\"><IMG SRC=\""
      + snowflake +"\" BORDER=0></LAYER>");
   } else if (b4up) {
      document.write("<DIV ID=\"flake"+ i +"\" STYLE=\""
      + "position:absolute; z-index:"+ i +"; visibility:visible; "
      + "top:15px; left:15px;\"><IMG SRC=\""+ snowflake
      + "\" BORDER=0></DIV>");
      snowobj[i] = eval (document.getElementById("flake"+i).style);
   }//if
}//for

function snowNS() {            // Netscape4 main animation function
   for (i=0; i<no; ++i) {      // iterate for every snowflake
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
         xp[i] = Math.random()*(doc_width-am[i]-30);
         yp[i] = 0;
         stx[i] = 0.02 + Math.random()/10;
         sty[i] = 0.7 + Math.random();
      }//if
         dx[i] += stx[i];
         document.layers["flake"+i].top = parseInt(yp[i]) + 'px';
         document.layers["flake"+i].left = parseInt(xp[i]) 
            + am[i]*Math.sin(dx[i])  + 'px';
      }//for
   setTimeout("snowNS()", speed);
}//snowNS

function snowDocument() {      // MSIE4, Opera5, Netscape5 main
   for (i=0; i<no; ++i) {      // iterate for every flake
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
         xp[i] = Math.random()*(doc_width-am[i]-30);
         yp[i] = 0;
         stx[i] = 0.02 + Math.random()/10;
         sty[i] = 0.7 + Math.random();
      }//if
      dx[i] += stx[i];
      snowobj[i].top  = yp[i] + 'px';
      snowobj[i].left = xp[i] + am[i]*Math.sin(dx[i]) + 'px';
   }//for
   setTimeout("snowDocument()", speed);
}//snowDocument

if (ns4b) {                   // Netscape4
   snowNS();
} else if (b4up) {            // MSIE4, Opera5, Netscape5
   snowDocument();
}//if
}
//]]>