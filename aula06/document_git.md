# **Guia: Como Acessar o GitHub com o Git Bash?**

  

📌 *1. O que é Git Bash?*

  

O Git Bash é um terminal que permite executar comandos do Git no Windows.

Ele é usado para versionar projetos, criar repositórios e interagir com o GitHub diretamente pelo terminal.

📌 *2. Pré-requisitos*

Antes de começar, você precisa ter:

  

 - Git Bash instalado;
   
 - Baixar aqui;

  

 - Conta no GitHub;
   
 - Criar conta;

  

 - Projeto local para versionar (pode ser um simples arquivo .txt ou
   código).

  

📌 *3. Configurando o Git no Git Bash*

Abra o Git Bash e configure seu nome e e-mail (os mesmos do GitHub):

  

 - bash;
 - Copiar;
 - Editar;
 - git config --global user.name "Seu Nome";
 - git config --global user.email "seuemail@example.com".

**Verifique as configurações:**

 1. bash
 2. Copiar
 3. Editar
 4. git config --list

📌 *4. Autenticação com o GitHub*

Existem duas formas principais de autenticação:

  

🔑 Opção 1 — Via HTTPS (com Token)

 1. No GitHub, vá em Settings → Developer settings → Personal access   
    tokens;
    
      
    
 2. Gere um token com permissões de repo.

    
        
    
    Ao fazer git push pela primeira vez, use:
    
      
    
     - Usuário → Seu usuário do GitHub
    
      
    
     - Senha → O token gerado

  

**Exemplo ao clonar:**

  

 1. bash
 2. Copiar
 3. Editar
 4. git clone https://github.com/usuario/repositorio.git

🔑 Opção 2 — Via SSH *(mais segura)*

**Gerar chave SSH:**

  

 1. bash
 2. Copiar
 3. Editar
 4. ssh-keygen -t rsa -b 4096 -C "seuemail@example.com"
 5. Aperte Enter até concluir.

  

**Iniciar o agente SSH:**

  

 1. bash
 2. Copiar
 3. Editar
 4. eval "$(ssh-agent -s)"
 5. ssh-add ~/.ssh/id_rsa

**Copiar a chave pública:**

  

 1. bash
 2. Copiar
 3. Editar
 4. cat ~/.ssh/id_rsa.pub
 5. No GitHub, vá em Settings → SSH and GPG keys → New SSH key, cole a
    chave e salve.

  

**Testar conexão:**

  

 1. bash
 2. Copiar
 3. Editar
 4. ssh -T git@github.com

**OBS**: Se aparecer algo como *"Hi, seu-usuario! You've successfully authenticated"*, está pronto.

  

📌 *5. Clonando um Repositório*

  

 1. bash
 2. Copiar
 3. Editar

# HTTPS

***git clone https://github.com/usuario/repositorio.git***

  

# SSH

***git clone git@github.com:usuario/repositorio.git***

  

📌 *6. Enviando um Projeto para o GitHub*

  

 - Criar um repositório no GitHub (sem README para evitar conflitos).

  

**No terminal:**

  

 1. bash
 2. Copiar
 3. Editar
 4. cd pasta-do-projeto
 5. git init
 6. git add .
 7. git commit -m "Primeiro commit"

  

# HTTPS

***git remote add origin https://github.com/usuario/repositorio.git***

  

# SSH

***git remote add origin git@github.com:usuario/repositorio.git***

  

***git branch -M main***

***git push -u origin main***

  

📌 *7. Comandos Git Mais Usados*

  

 1. bash
 2. Copiar
 3. Editar

git status: **Verifica status dos arquivos**;

git add: **Adiciona todos os arquivos**;

git commit -m "": **Salva alterações no histórico**;

git pull # **Atualiza repositório local**;

git push: **Envia alterações para o GitHub**;

git log: **Histórico de commits**.

  

📌 *8. Dicas Importantes*

  

**Sempre** faça *git pull* antes de começar a editar para evitar conflitos.

  

Use commits **claros** e **descritivos**.

  

Não suba arquivos desnecessários *(use .gitignore)*.