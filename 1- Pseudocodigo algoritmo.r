función recomendar_libro(usuario):
    libros = obtener_libros_catalogo()
    puntuaciones = diccionario vacío

    por cada libro en libros:
        si libro ya canjeado por usuario:
            continuar

        puntuaciones[libro] = 0
        puntuaciones[libro] += popularidad(libro)  # Basado en número de canjeos
        puntuaciones[libro] += actividad_usuario(usuario, libro)  # Basado en recursos usados

    libros_recomendados = ordenar_por_puntuacion(puntuaciones)
    return libros_recomendados[:N]  # Retornar los N mejores libros

    ## Marvin Leonel García Lémus
    ## leogarcia0027@gmail.com
    ## Desafio Tecnico Susaeta Ediciones / Algoritmo