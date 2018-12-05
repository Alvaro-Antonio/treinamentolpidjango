from django.db import models

class sugestaoSimulado(models.Model):
    pergunta = models.CharField(max_length=200)
    respostaCerta = models.CharField(max_length=200, help_text="Atenção nesse campo, ele é para a resposta correta")
    respostaErrada1 = models.CharField(max_length=200)
    respostaErrada2 = models.CharField(max_length=200)
    respostaErrada3 = models.CharField(max_length=200)
    respostaErrada4 = models.CharField(max_length=200)

    def __str__(self):
        return self.pergunta