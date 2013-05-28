<section class="content">

	<nav id="arquivos">
		<ul id="menu">
			<li class="index">Arquivos</li>
			<li class="editor"><a href="?p=editor">Editor</a></li>
			<li class="index"><a href="?p=editor&file=arq1">Arq #1</a></li>
			<li class="demo1"><a href="?p=editor&file=arq2">Arq #2</a></li>
		</ul>
	</nav>
			
	<section id="editor"><?php echo $conteudo;?></section>
		
</section>

<script>
	var editor = ace.edit("editor");
	editor.setTheme("ace/theme/monokai");
	editor.getSession().setMode("ace/mode/php");
	editor.setFontSize(18);

	//alert(editor.getValue())
	var conteudo = editor.getValue();
	var salvar = false;

	var timer = setTimeout(up, 5000);

	function salva() {
		salvar = true;
	}

	function up() {
		//alert('up');
		if (salvar) {
			//alert(editor.getValue());

			$.ajax({
				type: "POST",
				url: "?p=salvar&file=<?php echo $nome_arquivo;?>",
				data: { conteudo: editor.getValue() }
			}).done(function( msg ) {
				//alert( msg );
			});

			salvar = false;
		}
		timer = setTimeout(up, 5000);
	}

	editor.on('change', function(){
		//alert('on Change');
		salva();
	});
</script>
