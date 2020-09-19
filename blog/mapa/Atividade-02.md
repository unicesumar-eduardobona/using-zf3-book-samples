# Adicionar Autor do Post

# Criar tabela de autores e vincular ao Post

tabela: author
- id (primary key)
- name
- email
- status (true/false)

Quais são atividades?
- A tabela author deve abstrair entity e implementar interface de datas
- Vincular author com post sendo que um post tem um autor e um autor pode ter vários posts
- Fazer via evento do Doctrine validação para que um autor possa ser autor de post desde que esteja ativo (status true), do contrário emitir exception
- Adicionar ao formulário de post um input type=text para email do autor que será digitado no cadastro
- Se digitar email que não existe, emitir mensagem na tela do formulário
- Autor (email) deverá estar em formulário apenas para inserir. Em editar não precisa.
- O sistema a partir do email deverá vincular autor ao formulário com entidade post.

E para finalizar o trabalho:
- Criar no menu do site uma aba Autores
- Esta página deverá listar os autores em ordem alfabética
- Ao clicar no autor (link) deverá listar posts do autor selecionado (neste caso específico, pode ser usado a mesma página inicial desde que comporte filtros por autor)
