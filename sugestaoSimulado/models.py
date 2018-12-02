from django.db import models

class sugestaoSimulado(models.Model):
    pergunta = models.CharField(max_length=200)
    respostaCerta = models.CharField(max_length=200)
    respostaErrada1 = models.CharField(max_length=200)
    respostaErrada2 = models.CharField(max_length=200)
    respostaErrada3 = models.CharField(max_length=200)
    respostaErrada4 = models.CharField(max_length=200)

    def __str__(self):
        return self.pergunta