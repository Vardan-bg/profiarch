import { NestFactory } from '@nestjs/core';
import { ApplicationModule } from './app.module';

async function bootstrap() {
  const app = await NestFactory.create(ApplicationModule);

  app.useStaticAssets(__dirname + '/App/src');
//  app.setBaseViewsDir(__dirname + '/views');
  app.setViewEngine('hbs');
  await app.listen(3000);
}
bootstrap();
