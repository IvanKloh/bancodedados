
/*
Descricao: buscando dados no banco
Autor: Ivan Kloh
Data: 29/05/2020 até 30/06/2020
*/
		///funcao inicio Start
			function inicio(host){
				
					window.location.href = "http://"+host+"/aulasenac/bancodedados/visao/index.php"
				
			}
///função inicio End

		///funçao showUser start

			function showUser(fname,lnasc,lsexo){
				if(fname=="" || lnasc=="" || lsexo==""){
				  document.getElementById("txtHint").innerHTML= alert('Aluno Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Aluno Cadastrado');
			   		location.href='../visao/listarAlunos.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereAlunos.php?fname="+fname+"&lnasc="+lnasc+"&lsexo="+lsexo,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
		///função showUser End	
		///função showUserBuscar start

			function showUserBuscar(fname){
				if(fname=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarAlunos.php?fname="+fname,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
		///função showUserBuscar End			
		///funçao de alterar start
			function alterar(fname,lnasc,lsexo,lid){
				if(fname=="" || lnasc=="" || lsexo==""|| lid==""){
					alert('Falha Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					 var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

				    //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;

					if(vl == 1){///condição para o alert
					//alert(vl) ;
					alert('Aluno Alterado');
			   		location.href='../visao/listarAlunos.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarAlunos.php?fname="+fname+"&lnasc="+lnasc+"&lsexo="+lsexo+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
		///função alterar End
		///funçao de limpar start
			function limpar(){
				document.getElementById('fname').value='';
				document.getElementById('lnasc').value='';
				document.getElementById('lsexo').value='';
				

			}
		///função limpar End

		///funçao de sair start
			function sair(host){
				var r = confirm("Deseja Realmente Sair??");
				if (r==true){
					window.location.href = "http://"+host+"/aulaSenac/bancodedados/controle/sair.php"
				}
			}
		///função sair End
		///funçao de inatividade start
			var tempo = 0;
			var mexer=0;
			var clicar=0;
			var tecla=0;



			setInterval(function(){
				tempo++;
			///movimento do cursor start
	

				document.onmousemove =function(){///função onde mexe o mause
					mexer = 1;
				}
				document.onmousedown =function(){///função onde clicar os botões do mause
					clicar = 1;	
				}
				document.onkeypress =function(){///função quando aperta uma tecla do teclado
					tecla = 1;	
				}
				
				/*var data = new Date();
				var hora = data.getHours();
				var min = data.getMinutes();
				var seg = data.getSeconds();
				console.log(hora+":"+min+":"+seg);*/
				console.log(mexer);
				if(mexer == 1){///quando mexer o mause retorna 1 e começa a contagem de novo
					 mexer = 0;
					 tempo = 0;
					// console.log('Mexeu');
				}
				if (clicar ==1) {//quando clicar o botão do mause retorna 1 e começa a contagem de novo
					 clicar = 0;
					 tempo = 0;
					// console.log('clicar');
				}
				if (tecla == 1) {//quando aperta uma tecla retorna 1 e começa a contagem de novo
					 tecla = 0;
					 tempo = 0;
					 //console.log('tecla');

				}
					
			if(tempo>=150000){//quando ficar mais de 15 segundos de inatividade da o alerte e sai do sistema
			tempo = 0;
				alert('tempo de sessão expirado');
				window.location.href=(window.location.protocol + "//" +window.location.host + "/" +"aulasenac/bancodedados/controle/sair.php"); 
					

				}


			}, 1000);

		///funçao de inatividade end
		///funçao buscarDisciplina start
			function buscarDisciplina(disc){
				if(disc=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarDisciplina.php?disc="+disc,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
		///função buscarDisciplina End
		///funçao insereDisciplina start
			function insereDisciplina(disc){
				if(disc==""){
				  document.getElementById("txtHint").innerHTML= alert('Disciplina Não Cadastrada');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Disciplina Cadastrada');
			   		location.href='../visao/listarDisciplina.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereDisciplina.php?disc="+disc,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
		///funçao insereDisciplina End
		///função AlterarDisciplina	start			
			function alterarDisciplina(disc,lid){
				if(disc==""|| lid==""){
					alert('Falha Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					 var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

				if(vl == 1){///condição para o alert
					alert('Disciplina Alterada');
			   		location.href='../visao/listarDisciplina.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarDisciplina.php?disc="+disc+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
		///função AlterarDisciplina End
		///função limparDisciplina start	
	
			function limparDisciplina(){
				document.getElementById('disc').value='';
			}

		///função limparDisciplina end

		///função insereProfessores start	

			function insereProfessores(prof,disc,turma){
				if(prof=="" || disc=="" || turma==""){
				  document.getElementById("txtHint").innerHTML= alert('Professor(a) Não Cadastrado(a)');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Professor(a) Cadastrado(a)');
			   		location.href='../visao/listarProfessores.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereProfessores.php?prof="+prof+"&disc="+disc+"&turma="+turma,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}

		///função insereProfessores End
		///função buscarProfessores start
			function buscarProfessores(prof){
				if(prof=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarProfessores.php?prof="+prof,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
		///função buscarProfessores end
		///função alterarProfessores start
			function alterarProfessores(prof,disc,turma,lid){
				if(prof=="" || disc=="" || turma==""|| lid==""){
					alert('Falha Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					 var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

				if(vl == 1){///condição para o alert
					alert('Professor(a) Alterado(a)');
			   		location.href='../visao/listarProfessores.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarProfessores.php?prof="+prof+"&disc="+disc+"&turma="+turma+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
		///função alterarProfessores End
		///funçao de limparProfessores start
			function limparProfessores(){
				document.getElementById('prof').value='';
				document.getElementById('disc').value='';
				document.getElementById('turma').value='';
			}
		///função limparProfessores end
		///função insereTurma start

			function insereTurma(turma,id_professor,id_aluno,id_disciplina,turno){
				if(turma== ""|| id_professor==""|| id_aluno ==""|| id_disciplina=="" || turno==""){
				  document.getElementById("txtHint").innerHTML= alert('Turma Não Cadastrada');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Turma Cadastrada');
			   		location.href='../visao/listarTurma.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereTurma.php?turma="+turma+"&id_professor="+id_professor+"&id_aluno="+id_aluno+"&id_disciplina="+id_disciplina+"&turno="+turno,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
				
			}
		///função insereTurma end
		///função buscarTurma start
			function buscarTurma(turma){
				if(turma=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarTurma.php?turma="+turma,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
		///função buscarTurma end
		///função alterarTurma start
			
			function alterarTurma(turma,id_professor,id_aluno,id_disciplina,turno,lid){
				if(turma== ""|| id_professor==""|| id_aluno ==""|| id_disciplina=="" || turno==""|| lid==""){
					alert('Falha Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					 var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

				if(vl == 1){///condição para o alert
					alert('Turma Alterada');
			   		location.href='../visao/listarTurma.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarTurma.php?turma="+turma+"&id_professor="+id_professor+"&id_aluno="+id_aluno+"&id_disciplina="+id_disciplina+"&turno="+turno+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
		///função limparTurma start
			function limparTurma(){
				document.getElementById('turma').value='';
				document.getElementById('id_professor').value='';
				document.getElementById('id_aluno').value='';
				document.getElementById('id_disciplina').value='';
				document.getElementById('turno').value='';

			}
		/// função limparTurma end
		///função insereUsuario start
			function insereUsuario(nome_usuario,email_usuario,senha_usuario,){
				if(nome_usuario== ""|| email_usuario==""|| senha_usuario ==""){
				  document.getElementById("txtHint").innerHTML= alert('Usuário Não Cadastrado');//Nao teve
				  return;
				  } 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				     xmlhttp = new XMLHttpRequest();
				  } 

				  xmlhttp.onreadystatechange=function() 
				  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				  

				if (xmlhttp.responseText!==false){///condição para o alert
					alert('Usuário Cadastrado');
			   		location.href='../visao/listarUsuario.php';
				
					}
				    }
				  	}
					xmlhttp.open("GET","../controle/insereUsuario.php?nome_usuario="+nome_usuario+"&email_usuario="+email_usuario+"&senha_usuario="+senha_usuario,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
					
			}
		///função insereUsuario end
		///função buscarUsuario start
			function buscarUsuario(nome_usuario){
				if(nome_usuario=="")  {
					document.getElementById("txtHint").innerHTML="<b>Nenhum Resultado Encontrado</b>";///caso a consulta não encontre nenhum resultado
					return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				  } 
    			   xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
					  }
					xmlhttp.open("GET","../controle/buscarUsuario.php?nome_usuario="+nome_usuario,true);///local para onde vai ser enviados os parametros ou valores
					xmlhttp.send();
			}
		///função buscarUsuario end
		///função alterarUsuario start
			function alterarUsuario(nome_usuario,email_usuario,senha_usuario,lid){
				if(nome_usuario== ""|| email_usuario==""|| senha_usuario ==""|| lid==""){
					alert('Falha Alterar');///caso o alterar tenha algum erro aparecera essa mensagem
				  	return;
				} 
				if (window.XMLHttpRequest)  { ///condiçao para a consulta no servidor
				    xmlhttp = new XMLHttpRequest();
				    } 
				    xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200){
					 var meuJson = JSON.parse(xmlhttp.responseText);
					 //alert(xmlhttp.responseText);
        			  //var obj = JSON.parse('{ "name":"John", "age":30, "city":"New York"}'); 
                      //console.log(xmlhttp.responseText);
 					  var st  = meuJson.status;
 					  var vl  = meuJson.data;

				if(vl == 1){///condição para o alert
					alert('Usuário Alterado');
			   		location.href='../visao/listarUsuario.php';
					}
				    }
				 	}
				xmlhttp.open("GET","../controle/alterarUsuario.php?nome_usuario="+nome_usuario+"&email_usuario="+email_usuario+"&senha_usuario="+senha_usuario+"&lid="+lid,true);///local para onde vai ser enviados os parametros ou valores
				xmlhttp.send();
							
			}
		///função alterarUsuario end
		///função limparUsuario start
			function limparUsuario(){
				document.getElementById('nome_usuario').value='';
				document.getElementById('email_usuario').value='';
				document.getElementById('senha_usuario').value='';
				
			}
		///função limparUsuario end
		 $(document).ready(function() {

			    // Setup - add a text input to each footer cell
			    $('#myTable thead tr').clone(true).appendTo( '#myTable thead' );
			    $('#myTable thead tr:eq(1) th').each( function (i) {
			        var title = $(this).text();
			        $(this).html( '<input type="text" placeholder="Procurar '+title+'" />' );
			 
			        $( 'input', this ).on( 'keyup change', function () {
			            if ( table.column(i).search() !== this.value ) {
			                table
			                    .column(i)
			                    .search( this.value )
			                    .draw();
			            }
			        } );
			    } );
			 
			 

			    var table = $('#myTable').DataTable( {
			         /*dom: 'Bfrtip',
			        buttons: [
			            'copy', 'csv', 'excel', 'pdf', 'print'
			        ],*/
			        orderCellsTop: true,
			        fixedHeader: true,

			          "bJQueryUI": true,
			                "oLanguage": {
			                    "sProcessing":   "Processando...",
			                    "sLengthMenu":   "Exibir _MENU_ Resultados",
			                    "sZeroRecords":  "Nenhum Resultado Encontrado.",
			                    "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ Resultados",
			                    "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
			                    "sInfoFiltered": "",
			                    "sInfoPostFix":  "",
			                    "sSearch":       "Procurar:",
			                    "sUrl":          "",
			                    "oPaginate": {
			                        "sFirst":    "Primeiro",
			                        "sPrevious": "Anterior",
			                        "sNext":     "Próximo",
			                        "sLast":     "Último"
			                    }
			                },
			                dom: 'Bfrtip',
			        buttons: [
			          { extend: 'copy', text: 'Copiar' }, 'csv', 'excel', 'pdf', 
			            
			             { extend: 'print', text: 'Imprimir' }
			        ]
			             

			    } );
			   
			$(function () {
			  $('[data-toggle="tooltip"]').tooltip()
			});


			} );



/// funcao de filtros e relatorios do data tables End