Rosabalan Lingerie & Sleepwear Website (landing page / leads capture)

Landing page criada para capturar leads vindos de redes sociais.

GitHub

Para clonar o repositorio:

No GitHub:

Clicar em Clone or download e copiar a URL do repositório.
No Bash/Command line: git clone [URL do repositorio].
Iniciar a sua Branch:
Para deixar tudo organizado vamos utilizar a seguinte nomeclatura para os nomes das branches; branch_nome. Uma vez que o repositorio esteja clonado na sua maquina o comando para iniciar a sua branch sera:

git checkout -b [branch_nome] para criar a nova branch e mudar a branch ativa para ela.
git push origin [branch_nome] para pushar a branch para o repositorio.

GitHub Help:

Trabalhar com a sua Branch:

A ordem para modificar/subir os seus arquivos é:

git pull origin master para puxarmos as atualizações do repositorio remoto.
git status para vermos o status do branch (arquivos que foram ou a serem modificados/deletados/adicionados). E confirmar qual a branch onde esta trabalhando.
git add [nome do arquivo] para adicionar os arquivos a serem commitados.
Alternativamente podemos usar o git add . para addicionarmos todos os arquivos da lista ao commit (cuidado!).
git commit -m "[mensagem]" para commitar e adicionar a mensagem referente ao commit.
Caso vc esqueça de colocar -m o git vai abrir o Vim e vai virar uma bagunça, aperte esc e digite :q!, o programa sera encerrado e vc pode repetir o passo 4 (mas nao custa nada dar um git status só pra confirmar onde o processo parou).
git push origin [branch_nome] para enviar os arquivos adicionados e commitados à sua branch remota!

Para enviar seus commits para Branch Master:
Niguém deve commitar na branch Master

Realizar esse processo só quando a funcionalidade estiver finalizada:

git checkout master para mudar para branch master.
git pull origin master para atualizar sua branch master local com os commits da remota.
git checkout [branch_nome] para mudar para sua branch.
git merge master para trazer os commits novos da master para sua branch local. Pode ocorrer conflitos nesse momento, caso aconteça será necessário analisar um a um.
git push origin [branch_nome] para atualizar sua branch remota.

No GitHub, criar um pull request da sua branch para a branch master.
Outro membro do grupo deve aceitar o pull request
=======

