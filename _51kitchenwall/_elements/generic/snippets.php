<div class="_snippet-columns">
    <div>
<h>Logo</h>
<pre>
&lt;a href="/" title="Return to the homepage"&gt;
    &lt;img src="/images/logo.png" height="45" width="106" alt=""&gt;
&lt;/a&gt;
</pre>

<h>Accordion</h>
<pre>
&lt;div class=&quot;accordion&quot;&gt;
    &lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;Link1&lt;/a&gt;
    &lt;div class=&quot;active&quot;&gt;Panel1&lt;/div&gt;
    &lt;a href=&quot;#&quot;&gt;Link2&lt;/a&gt;
    &lt;div&gt;Panel2&lt;/div&gt;
&lt;/div&gt;
</pre>

<h>Tabs</h>
<pre>
&lt;div data-tabs&gt;
    &lt;div class=&quot;tablist&quot;&gt;
        &lt;a href=&quot;#tab1&quot; class=&quot;active&quot;&gt;Tab1&lt;/a&gt;
        &lt;a href=&quot;#tab2&quot;&gt;Tab2&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tabset&quot;&gt;
        &lt;div id=&quot;tab1&quot; class=&quot;tabpanel active&quot;&gt;Panel1&lt;/div&gt;
        &lt;div id=&quot;tab2&quot; class=&quot;tabpanel&quot;&gt;Panel2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>

<h>Tabs with accordion transformation</h>
<pre>
&lt;div data-tabs&gt;
    &lt;div class=&quot;tablist&quot;&gt;
        &lt;a href=&quot;#tab1&quot; class=&quot;active&quot;&gt;Tab1&lt;/a&gt;
        &lt;a href=&quot;#tab2&quot;&gt;Tab2&lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;tabset&quot;&gt;
        &lt;a href=&quot;#tab1&quot; class=&quot;active&quot;&gt;Tab1&lt;/a&gt;
        &lt;div id=&quot;tab1&quot; class=&quot;tabpanel active&quot;&gt;Panel1&lt;/div&gt;
        &lt;a href=&quot;#tab2&quot;&gt;Tab2&lt;/a&gt;
        &lt;div id=&quot;tab2&quot; class=&quot;tabpanel&quot;&gt;Panel2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    
    <div>
<h>Check / Radio Buttons</h>
<pre>
input[type=checkbox] {
    display: none;
}
input[type=checkbox] + label {
    text-indent: 20px;
    background: url(/images/state-on.png) no-repeat;
}
input[type=checkbox]:checked + label {
    background-image: url(/images/state-off.png);
}
</pre>

<h>Placeholders</h>
<pre>
::-webkit-input-placeholder { color: #848484; }
::-moz-placeholder { color: #848484; }
:-ms-input-placeholder { color: #848484; }
</pre>

<h>Select with custom arrow</h>
<pre>
select::-ms-expand{display: none;}
select {
    -webkit-appearance: none;
       -moz-appearance: none;
            appearance: none;
            
    height: 50px;
    border: 1px solid black;
    padding-right: 30px;
    background: url('/images/arrow.png') right center no-repeat;
}
</pre>
    </div>
</div>



