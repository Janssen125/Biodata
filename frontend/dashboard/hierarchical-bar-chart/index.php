<!DOCTYPE html>
<meta charset="utf-8">
<title>Hierarchical Bar Chart</title>
<link rel="stylesheet" type="text/css" href="./inspector.css">
<body>
    <style>
        .observablehq--inspect{
            visibility: hidden;
        }
    </style>
<script type="module">

import define from "./index.js";
import {Runtime, Inspector} from "./runtime.js";

const runtime = new Runtime();
const main = runtime.module(define, Inspector.into(document.body));

</script>
</body>
</html>