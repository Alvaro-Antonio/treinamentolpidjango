from django.db import models

class sugestaoSimulado(models.Model):
    pergunta = models.Charfield(max_length=200)
    respostaCerta = models.Charfield(max_length=200)
    respostaErrada1 = models.Charfield(max_length=200)
    respostaErrada2 = models.Charfield(max_length=200)
    respostaErrada3 = models.Charfield(max_length=200)
    respostaErrada4 = models.Charfield(max_length=200)
