<h1>ލިޔުމެއް ޝާއިޢުކުރުން</h1>

<div style="display: flex; justify-content: center;">
    <form action="/new" method="POST" class="display: flex; justify-content: center; flex-direction: column;">
        <input type="text" name="title" class="mvtyper thaana-keyboard" placeholder="ސުރުހީ">
        <input type="text" name="author" class="mvtyper thaana-keyboard" value="anonymous" placeholder="ލިޔުނީ">
        <div id="editor" class="pell" style="margin-top: 25px;"></div>
        <input type="hidden" name="content" id="html-output">

    <button type="submit">Publish</button>
    </form>

</div>