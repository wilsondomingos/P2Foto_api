
# 📸 P2Foto API

![Laravel](https://img.shields.io/badge/Laravel-8.x+-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Android](https://img.shields.io/badge/Android-Java-3DDC84?style=for-the-badge&logo=android&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

A **P2Foto API** é o backend robusto desenvolvido em **Laravel** que alimenta o aplicativo móvel **P2PHOTO** (feito em Java Android). Esta API gerencia a autenticação de usuários, o armazenamento de fotos e a lógica de compartilhamento de imagens entre amigos na plataforma.

---

## 🚀 Funcionalidades

- **🔐 Autenticação Segura:** Registro e login de usuários via Laravel Sanctum (Tokens).
- **👤 Gestão de Usuários:** Perfil, edição de dados e lista de amigos.
- **🖼️ Galeria de Fotos:** Upload, listagem, visualização e exclusão de fotos.
- **🤝 Compartilhamento:** Envio de fotos privadamente para amigos conectados.
- **🛡️ Segurança:** Proteção de rotas, validação de dados e armazenamento seguro de mídia.

---

## 🛠️ Tecnologias Utilizadas

| Tecnologia | Versão | Função |
| :--- | :--- | :--- |
| **Laravel** | 9.x / 10.x | Framework Backend |
| **PHP** | 8.1+ | Linguagem de Servidor |
| **MySQL / PostgreSQL** | 5.7+ | Banco de Dados |
| **Laravel Sanctum** | Latest | Autenticação API (Tokens) |
| **Intervention Image** | Latest | Manipulação de Imagens |

---

## 📦 Instalação e Configuração Local

Siga os passos abaixo para configurar o ambiente de desenvolvimento da API.

### 1. Pré-requisitos
- PHP 8.1 ou superior instalado.
- Composer instalado.
- Servidor de Banco de Dados (MySQL, PostgreSQL ou SQLite).
- Git instalado.

### 2. Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/p2foto_api.git
cd p2foto_api
