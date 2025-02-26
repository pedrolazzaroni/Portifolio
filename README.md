# 🚀 Pedro Lazzaroni | Portfólio Pessoal

<div align="center">
  <img src="assets/favicon/favicon.png" alt="Logo" width="80">
  <h3 align="center">Pedro.dev - Portfólio Profissional</h3>
  
  <p align="center">
    Um portfólio moderno, responsivo e interativo para mostrar projetos e habilidades
    <br />
    <a href="https://pedrolazzaroni.com.br"><strong>Veja online »</strong></a>
  </p>
</div>

<div align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
</div>

## 📋 Índice

- [Sobre o Projeto](#-sobre-o-projeto)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Estrutura do Projeto](#-estrutura-do-projeto)
- [Como Instalar](#-como-instalar)
- [Como Usar](#-como-usar)
- [Personalização](#-personalização)
- [Contribuições](#-contribuições)
- [Licença](#-licença)
- [Contato](#-contato)
- [Agradecimentos](#-agradecimentos)

## 🔍 Sobre o Projeto

Este é um portfólio profissional desenvolvido para apresentar projetos, habilidades e formação acadêmica de forma moderna e interativa. O design foi pensado para proporcionar uma excelente experiência do usuário tanto em dispositivos desktop quanto móveis.

O projeto utiliza tecnologias web modernas e inclui animações elegantes, navegação suave e um formulário de contato funcional integrado com EmailJS.

![Captura de Tela do Portfólio](assets/images/portifolio.png)

## ✨ Funcionalidades

- **Design Responsivo**: Adaptação perfeita para qualquer dispositivo
- **Modo Escuro**: Alternância entre temas claro e escuro
- **Animações Suaves**: Elementos animados ao entrar na viewport
- **Formulário de Contato**: Integração com EmailJS para envio de mensagens
- **Filtragem de Projetos**: Categorização e filtragem dos projetos apresentados
- **Menu Mobile**: Menu de navegação otimizado para dispositivos móveis
- **Animações Interativas**: Elementos que reagem à interação do usuário
- **Cache-busting**: Sistema de versionamento CSS para evitar problemas de cache

## 🛠 Tecnologias Utilizadas

- **HTML5** - Estruturação semântica do conteúdo
- **CSS3** - Estilização avançada e animações
- **JavaScript** - Interatividade e animações dinâmicas
- **PHP** - Processamento do formulário e cache-busting
- **EmailJS** - Sistema de envio de emails
- **Bootstrap Icons** - Biblioteca de ícones
- **Google Fonts** - Fontes personalizadas
- **Intersection Observer API** - Animações baseadas em scroll

## 📁 Estrutura do Projeto

```
📦 Portifólio
 ┣ 📂 assets
 ┃ ┣ 📂 favicon
 ┃ ┃ ┗ 📜 favicon.png
 ┃ ┗ 📂 images
 ┃   ┣ 📜 artigo.png
 ┃   ┣ 📜 lazzhub.png
 ┃   ┣ 📜 logo3.png
 ┃   ┣ 📜 pontoon.png
 ┃   ┗ 📜 portifolio.png
 ┣ 📜 index.php
 ┣ 📜 main.js
 ┣ 📜 styles.css
 ┗ 📜 README.md
```

## 🔧 Como Instalar

1. Clone este repositório:
   ```bash
   git clone https://github.com/pedrolazzaroni/portifolio.git
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd portifolio
   ```

3. Caso não tenha um servidor PHP local, você pode usar o PHP Built-in Server:
   ```bash
   php -S localhost:8000
   ```

4. Acesse o projeto em seu navegador:
   ```
   http://localhost:8000
   ```

## 💻 Como Usar

### Configuração do EmailJS

O portfólio inclui um formulário de contato funcional que utiliza EmailJS para envio de mensagens. Para configurá-lo:

1. Crie uma conta no [EmailJS](https://www.emailjs.com/)
2. Obtenha seu Service ID, Template ID e Public Key
3. Substitua os valores no arquivo `main.js`:

```javascript
emailjs.init("SUA_PUBLIC_KEY");
emailjs.send("SEU_SERVICE_ID", "SEU_TEMPLATE_ID", templateParams)
```

### Personalização das Informações

Edite o arquivo `index.php` para personalizar:
- Informações pessoais
- Projetos apresentados 
- Habilidades e formação acadêmica

## 🔄 Personalização

### Tema de Cores

Para alterar o tema de cores, edite as variáveis CSS no arquivo `styles.css`:

```css
:root {
  --primary: #FFA500;
  --primary-dark: #FF8C00;
  /* ... outras cores ... */
}
```

### Projetos

Para adicionar novos projetos, siga o formato HTML existente na seção de projetos:

```html
<div class="project-card fade-in" data-category="categoria">
    <!-- Conteúdo do projeto -->
</div>
```

## 📤 Contribuições

Contribuições são bem-vindas! Se você tem sugestões para melhorar este portfólio:

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Faça commit das alterações (`git commit -m 'Add some AmazingFeature'`)
4. Envie para o branch principal (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 📄 Licença

Distribuído sob a licença MIT. Veja `LICENSE` para mais informações.

## 📬 Contato

Pedro Lazzaroni - [contato@pedrolazzaroni.com.br](mailto:contato@pedrolazzaroni.com.br)

Link do Projeto: [https://github.com/pedrolazzaroni/portifolio](https://github.com/pedrolazzaroni/portifolio)

## 🎉 Agradecimentos

- [Bootstrap Icons](https://icons.getbootstrap.com/)
- [Google Fonts](https://fonts.google.com/)
- [EmailJS](https://www.emailjs.com/)
- [Intersection Observer API](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API)

---

<p align="center">Desenvolvido com ❤️ por Pedro Lazzaroni</p>
