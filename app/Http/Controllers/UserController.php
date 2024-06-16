<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Импортируем модель User


class UserController extends Controller
{
    public function handleRequest(Request $request)
    {
        // Получаем ID пользователя из запроса
        $userId = $request->input('user_id');
        
        // Пытаемся найти пользователя в базе данных
        $user = User::find($userId);

        if ($user) {
            // Пользователь найден, возвращаем данные
            return response()->json(['user' => $user], 200);
        } else {
            // Пользователь не найден, возвращаем ошибку
            return response()->json(['error' => 'Пользователь не найден'], 404);
        }
        // Ваша логика обработки запроса здесь
    }
}