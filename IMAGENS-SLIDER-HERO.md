# 🖼️ IMAGENS NECESSÁRIAS PARA O SLIDER DO HERO

## 📁 **Estrutura de Pastas**

```
public/
└── images/
    ├── fundo-hero.webp           # Primeira imagem do slider (Desktop)
    ├── fundo-hero2.webp          # Segunda imagem do slider (Desktop)
    ├── fundo-hero3.webp          # Terceira imagem do slider (Desktop)
    ├── fundo-hero-mobile.webp    # Primeira imagem do slider (Mobile)
    ├── fundo-hero-mobile2.webp   # Segunda imagem do slider (Mobile)
    └── fundo-hero-mobile3.webp   # Terceira imagem do slider (Mobile)
```

## 🎯 **Especificações das Imagens**

### **Imagens do Slider (Desktop)**
- **Formato**: WebP (recomendado) ou JPG
- **Resolução**: Mínimo 1920x1080px (Full HD)
- **Orientação**: Paisagem (landscape)
- **Tamanho**: Máximo 2MB por imagem
- **Qualidade**: Alta (para boa aparência em telas grandes)

### **Imagens do Slider (Mobile)**
- **Formato**: WebP (recomendado) ou JPG
- **Resolução**: Mínimo 768x1024px
- **Orientação**: Retrato (portrait) ou paisagem
- **Tamanho**: Máximo 1MB por imagem
- **Qualidade**: Otimizada para dispositivos móveis

## 🎨 **Recomendações de Conteúdo**

### **fundo-hero.webp (Desktop)**
- Imagem principal da clínica
- Ambiente limpo e profissional
- Cores que combinem com o tema teal
- Pode incluir equipamentos modernos

### **fundo-hero2.webp (Desktop)**
- Imagem de atendimento
- Profissional em ação
- Ambiente acolhedor
- Foco na qualidade do serviço

### **fundo-hero3.webp (Desktop)**
- Imagem de resultados
- Sorrisos felizes
- Ambiente moderno
- Foco na satisfação do paciente

### **fundo-hero-mobile.webp (Mobile)**
- Versão mobile da imagem principal
- Otimizada para telas pequenas
- Foco no elemento principal
- Cores vibrantes para mobile

### **fundo-hero-mobile2.webp (Mobile)**
- Versão mobile da imagem de atendimento
- Composição simplificada
- Elementos principais em destaque
- Boa legibilidade em telas pequenas

### **fundo-hero-mobile3.webp (Mobile)**
- Versão mobile da imagem de resultados
- Foco nos resultados visuais
- Composição adaptada para mobile
- Cores que funcionem bem em telas pequenas

## ⚙️ **Como Funciona o Slider**

1. **Transição Automática**: A cada 5 segundos
2. **Efeito**: Fade in/out suave (1 segundo)
3. **Indicadores**: 3 pontos na parte inferior
4. **Interatividade**: Clique nos indicadores para mudar manualmente
5. **Responsivo**: Detecta automaticamente o tipo de dispositivo
6. **Imagens Adaptativas**: Carrega versões otimizadas para cada dispositivo
7. **Breakpoint**: 768px (abaixo = mobile, acima = desktop)

## 🔧 **Se as Imagens Não Estiverem Disponíveis**

O sistema tem fallback automático:
- **Desktop**: Se as imagens não carregarem, usa cor sólida teal
- **Mobile**: Se as imagens não carregarem, usa cor sólida teal
- **Console**: Mostra avisos e logs detalhados sobre o carregamento
- **Detecção**: Automaticamente detecta o tipo de dispositivo
- **Adaptação**: Carrega versões otimizadas para cada tela

## 📱 **Teste**

Para verificar se está funcionando:
1. Abra o console do navegador (F12)
2. Procure por mensagens sobre o slider
3. Verifique se as imagens estão carregando
4. Observe as transições automáticas
5. Teste os indicadores clicando neles

## 🚀 **Próximos Passos**

1. **Adicione as imagens desktop** na pasta `public/images/`:
   - `fundo-hero.webp`
   - `fundo-hero2.webp`
   - `fundo-hero3.webp`

2. **Adicione as imagens mobile** na pasta `public/images/`:
   - `fundo-hero-mobile.webp`
   - `fundo-hero-mobile2.webp`
   - `fundo-hero-mobile3.webp`

3. **Teste a responsividade**:
   - Redimensione a janela do navegador
   - Teste em dispositivos móveis
   - Verifique o console para logs

4. **Ajuste se necessário**:
   - Tempo de transição (atualmente 5 segundos)
   - Breakpoint responsivo (atualmente 768px)
   - Cores dos indicadores
