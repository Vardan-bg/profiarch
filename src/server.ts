import { NestFactory } from '@nestjs/core';
import { ApplicationModule } from './app.module';

async function bootstrap() {
    const app = await NestFactory.create(ApplicationModule);
    await app.listen(3000, '127.0.0.1');
}
bootstrap();