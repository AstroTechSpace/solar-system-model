from rest_framework import serializers, generics, status
from rest_framework.response import Response
from src.apps.utils import UpdatePlanetData
from src.apps.solar_system_api.models import Planet, Moon
from django.utils import timezone
class MoonSerializer(serializers.ModelSerializer):
    class Meta:
        model = Moon
        fields = ['name', 'url']


class SolarSystemSerializer(serializers.ModelSerializer):
    moons = MoonSerializer(many=True, read_only=True)
    class Meta:
        model = Planet
        fields = "__all__"

class SolarSystemApiView(generics.ListAPIView):
    serializer_class = SolarSystemSerializer

    def get(self, request, name):
        # now = timezone.now()
        # if now.hour == 0 and now.minute == 0:
        #     try:
            # except Exception as e:
            #     planet = Planet.objects.get(english_name=name)
            #     print(data={"error": f"Не удалось обновить данные: {str(e)}"}, status=status.HTTP_500_INTERNAL_SERVER_ERROR)
            #     serializer = self.serializer_class(planet)
            #     return Response(serializer.data)
            

        try:
            # updater = UpdatePlanetData()
            # updater.handle()
            planet = Planet.objects.get(english_name=name)
        except Planet.DoesNotExist:
            return Response(data={"error": "Ничего не найдено"}, status=status.HTTP_404_NOT_FOUND)
        
        
        serializer = self.serializer_class(planet)
        return Response(serializer.data)
    

class ChatGPT(generics.ListAPIView):
    def get(self, request, promt):
        return Response(data={'data': promt})