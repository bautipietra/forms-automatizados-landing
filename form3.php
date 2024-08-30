<!-- Becas -->

<!DOCTYPE html>
<html>

<head>
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/survey-core@1.11.13/survey.core.min.js"></script>
  <script src="https://unpkg.com/survey-core@1.11.13/survey.i18n.min.js"></script>
  <script src="https://unpkg.com/survey-core@1.11.13/themes/index.min.js"></script>
  <script src="https://unpkg.com/survey-js-ui@1.11.13/survey-js-ui.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/survey-core@1.11.13/defaultV2.min.css" />
  <link rel="stylesheet" href="./index.css" />
</head>

<body>
  <div id="surveyElement" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; min-height: 100%; height:100%"></div>
  <script src="./json.js"></script>
  <script src="./theme.js"></script>
  <script src="./index.js"></script>
  <script>
    const themeJson = {
      "themeName": "default",
      "colorPalette": "light",
      "isPanelless": false,
      "backgroundImage": "",
      "backgroundOpacity": 1,
      "backgroundImageAttachment": "scroll",
      "backgroundImageFit": "cover",
      "cssVariables": {
        "--sjs-corner-radius": "4px",
        "--sjs-base-unit": "8px",
        "--sjs-shadow-small": "0px 0px 0px 0px rgba(228, 228, 228, 1)",
        "--sjs-shadow-inner": "0px 0px 0px 0px rgba(0, 0, 0, 1)",
        "--sjs-border-default": "rgba(0, 0, 0, 0.16)",
        "--sjs-border-light": "rgba(0, 0, 0, 0.09)",
        "--sjs-general-backcolor": "rgba(255, 255, 255, 1)",
        "--sjs-general-backcolor-dark": "rgba(248, 248, 248, 1)",
        "--sjs-general-backcolor-dim-light": "rgba(249, 249, 249, 1)",
        "--sjs-general-backcolor-dim-dark": "rgba(243, 243, 243, 1)",
        "--sjs-general-forecolor": "rgba(0, 0, 0, 0.91)",
        "--sjs-general-forecolor-light": "rgba(0, 0, 0, 0.45)",
        "--sjs-general-dim-forecolor": "rgba(0, 0, 0, 0.91)",
        "--sjs-general-dim-forecolor-light": "rgba(0, 0, 0, 0.45)",
        "--sjs-secondary-backcolor": "rgba(255, 152, 20, 1)",
        "--sjs-secondary-backcolor-light": "rgba(255, 152, 20, 0.1)",
        "--sjs-secondary-backcolor-semi-light": "rgba(255, 152, 20, 0.25)",
        "--sjs-secondary-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-secondary-forecolor-light": "rgba(255, 255, 255, 0.25)",
        "--sjs-shadow-small-reset": "0px 0px 0px 0px rgba(228, 228, 228, 1)",
        "--sjs-shadow-medium": "0px 2px 6px 0px rgba(0, 0, 0, 0.1)",
        "--sjs-shadow-large": "0px 8px 16px 0px rgba(0, 0, 0, 0.1)",
        "--sjs-shadow-inner-reset": "0px 0px 0px 0px rgba(0, 0, 0, 1)",
        "--sjs-border-inside": "rgba(0, 0, 0, 0.16)",
        "--sjs-special-red-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-green": "rgba(25, 179, 148, 1)",
        "--sjs-special-green-light": "rgba(25, 179, 148, 0.1)",
        "--sjs-special-green-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-blue": "rgba(67, 127, 217, 1)",
        "--sjs-special-blue-light": "rgba(67, 127, 217, 0.1)",
        "--sjs-special-blue-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-special-yellow": "rgba(255, 152, 20, 1)",
        "--sjs-special-yellow-light": "rgba(255, 152, 20, 0.1)",
        "--sjs-special-yellow-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-article-font-xx-large-textDecoration": "none",
        "--sjs-article-font-xx-large-fontWeight": "700",
        "--sjs-article-font-xx-large-fontStyle": "normal",
        "--sjs-article-font-xx-large-fontStretch": "normal",
        "--sjs-article-font-xx-large-letterSpacing": "0",
        "--sjs-article-font-xx-large-lineHeight": "64px",
        "--sjs-article-font-xx-large-paragraphIndent": "0px",
        "--sjs-article-font-xx-large-textCase": "none",
        "--sjs-article-font-x-large-textDecoration": "none",
        "--sjs-article-font-x-large-fontWeight": "700",
        "--sjs-article-font-x-large-fontStyle": "normal",
        "--sjs-article-font-x-large-fontStretch": "normal",
        "--sjs-article-font-x-large-letterSpacing": "0",
        "--sjs-article-font-x-large-lineHeight": "56px",
        "--sjs-article-font-x-large-paragraphIndent": "0px",
        "--sjs-article-font-x-large-textCase": "none",
        "--sjs-article-font-large-textDecoration": "none",
        "--sjs-article-font-large-fontWeight": "700",
        "--sjs-article-font-large-fontStyle": "normal",
        "--sjs-article-font-large-fontStretch": "normal",
        "--sjs-article-font-large-letterSpacing": "0",
        "--sjs-article-font-large-lineHeight": "40px",
        "--sjs-article-font-large-paragraphIndent": "0px",
        "--sjs-article-font-large-textCase": "none",
        "--sjs-article-font-medium-textDecoration": "none",
        "--sjs-article-font-medium-fontWeight": "700",
        "--sjs-article-font-medium-fontStyle": "normal",
        "--sjs-article-font-medium-fontStretch": "normal",
        "--sjs-article-font-medium-letterSpacing": "0",
        "--sjs-article-font-medium-lineHeight": "32px",
        "--sjs-article-font-medium-paragraphIndent": "0px",
        "--sjs-article-font-medium-textCase": "none",
        "--sjs-article-font-default-textDecoration": "none",
        "--sjs-article-font-default-fontWeight": "400",
        "--sjs-article-font-default-fontStyle": "normal",
        "--sjs-article-font-default-fontStretch": "normal",
        "--sjs-article-font-default-letterSpacing": "0",
        "--sjs-article-font-default-lineHeight": "28px",
        "--sjs-article-font-default-paragraphIndent": "0px",
        "--sjs-article-font-default-textCase": "none",
        "--sjs-general-backcolor-dim": "rgba(243, 243, 243, 1)",
        "--sjs-primary-backcolor": "rgba(255, 100, 51, 1)",
        "--sjs-primary-backcolor-dark": "rgba(240, 94, 48, 1)",
        "--sjs-primary-backcolor-light": "rgba(255, 100, 51, 0.1)",
        "--sjs-primary-forecolor": "rgba(255, 255, 255, 1)",
        "--sjs-primary-forecolor-light": "rgba(255, 255, 255, 0.25)",
        "--sjs-special-red": "rgba(229, 10, 62, 1)",
        "--sjs-special-red-light": "rgba(229, 10, 62, 0.1)"
      },
      "header": {
        "inheritWidthFrom": "survey"
      },
      "headerView": "basic"
    }

    const json = {
      "locale": "es",
      "description": {
        "es": "https://comercioelectronico.wufoo.com/forms/z1k8y2dj0vwoqnm/\n"
      },
      "logoPosition": "right",
      "pages": [{
        "name": "page1",
        "elements": [{
            "type": "text",
            "name": "question1",
            "title": {
              "es": "Nombre"
            },
            "isRequired": true
          },
          {
            "type": "text",
            "name": "question2",
            "startWithNewLine": false,
            "title": {
              "es": "Apellido"
            },
            "isRequired": true
          },
          {
            "type": "text",
            "name": "question3",
            "title": {
              "es": "Email"
            },
            "isRequired": true
          },
          {
            "type": "text",
            "name": "question4",
            "startWithNewLine": false,
            "title": {
              "es": "Número de teléfono"
            },
            "isRequired": true
          },
          {
            "type": "text",
            "name": "question5",
            "title": {
              "es": "País de Residencia"
            },
            "isRequired": true
          },
          {
            "type": "text",
            "name": "question7",
            "startWithNewLine": false,
            "title": {
              "es": "Empresa"
            }
          },
          {
            "type": "text",
            "name": "question8",
            "title": {
              "es": "Codigo # de la Beca"
            },
            "isRequired": true,
            "placeholder": {
              "es": "#JuanFernández"
            }
          },
          {
            "type": "panel",
            "name": "panel1",
            "elements": [{
                "type": "html",
                "name": "question9",
                "html": {
                  "es": "<style>\n#terms-section h6 {\nmargin: 0}\n\n#terms-section div {\nfont-size: 14px;\ncolor: #444;\n\n    overflow-y: scroll;\n    max-height: 200px;\n\n}\n</style>\n\t<section id=\"terms-section\">\n\t\t<h6 id=\"title689\">\n\t\t\tTérminos y condiciones\n\t\t</h6>\n\t\t\t\t<br>\t<div id=\"instruct689\">\nLa presente Política de Privacidad establece los términos en que el eCommerce Institute usa y protege la información que es proporcionada por sus usuarios al momento de completar un formulario. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se emplea de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada.<br>\n<br>\nNuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con información que consideremos relevante para usted o que pueda brindar algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.<br>\n​<br>\nEl eCommerce Institute está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.<br>\n<br>\nPresto mi consentimiento sobre mis datos personales presentes en el formulario, para que el eCommerce Institute me pueda enviar correos electrónicos periódicamente con información que considere relevante para mí o que pueda brindar algún beneficio. Estos correos electrónicos serán enviados a la dirección que proporcione y podrán ser cancelados en cualquier momento.</div>\n\t\t\t</section>\n\t"
                }
              },
              {
                "type": "checkbox",
                "name": "question6",
                "title": {
                  "es": "He leído los Términos y Condiciones sobre la información que proporciono en el formulario y acepto recibir newsletters del eCommerce Institute."
                },
                "isRequired": true,
                "choices": [{
                  "value": "Item 1",
                  "text": {
                    "es": "Acepto"
                  }
                }]
              }
            ]
          }
        ]
      }],
      "showPageNumbers": true
    }

    const survey = new Survey.Model(json);
    survey.applyTheme(themeJson);
    survey.onComplete.add((sender, options) => {
      console.log(JSON.stringify(sender.data, null, 3));
    });

    $("#surveyElement").Survey({
      model: survey
    });

    const surveyContainer = document.getElementById('sp_100');
    surveyContainer.style.maxWidth = '900px'; // Ajusta el valor según tus necesidades
    surveyContainer.style.margin = '0 auto'; // Centra el formulario horizontalmente
  </script>
</body>

</html>